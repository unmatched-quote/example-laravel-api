<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim;

use PDO;
use App\Models\Claim;
use App\Models\Claim2File;
use Illuminate\Support\Arr;
use App\Models\ClaimRevision;
use App\Models\Claim2Section;
use App\Models\Claim2EavInstance;
use App\Exceptions\InvocationOrderException;
use Buckhill\LibEAV\Models\DataTransfer\Object\ObjectMetadata;
use function Ramsey\Uuid\v4 as uuidv4;

class CreateClaimState
{
    protected array $eav_object_identifiers = []; // EAV objects associated with the submission
    protected array $eav_object_collection = [];
    protected ?Claim $claim;
    protected ?ClaimRevision $claim_revision;
    protected array $eav_instances = [];
    protected array $uploaded_files = [];
    protected array $eav_validation_errors = [];
    protected array $junction_collection = [];
    protected array $financial_collection = [];

    public function __construct(
        public readonly array $payload,
        public readonly PDO $pdo,
        public readonly int $eav_version = 1
    ){}

    public function getClaimData(): array
    {
        return [
            'uuid' => uuidv4(),
            'custom_id' => Arr::get($this->payload, 'claim.custom_id'),
            'policy_id' => Arr::get($this->payload, 'claim.policy_id'),
            'external_ref' => Arr::get($this->payload, 'claim.external_ref'),
            'company_id' => Arr::get($this->payload, 'claim.company_id')
        ];
    }

    public function getClaimRevisionData(): array
    {
        return [
            'uuid' => uuidv4(),
            'claim_id' => $this->getClaim()->id,
            'owner_id' => Arr::get($this->payload, 'claim.owner_id', 0),
            'status_id' => Arr::get($this->payload, 'claim.status_id'),
            'status_eav_object_id' => 0,
            'status_eav_object_revision_id' => 0,
            'status_eav_object_instance_id' => 0,
            'status_eav_object_instance_revision_id' => 0,
            'type_id' => Arr::get($this->payload, 'claim.type_id'),
            'subtype_id' => Arr::get($this->payload, 'claim.subtype_id'),
            'eav_object_id' => 0,
            'eav_object_revision_id' => 0,
            'eav_object_instance_id' => 0,
            'eav_object_instance_revision_id' => 0,
            'handler_company_id' => Arr::get($this->payload, 'claim.handler_company_id'),
            'handler_user_id' => Arr::get($this->payload, 'claim.handler_user_id'),
            'payee_id' => Arr::get($this->payload, 'claim.payee_id'),
            'loss_adjuster_company_id' => Arr::get($this->payload, 'claim.loss_adjuster_company_id'),
            'loss_adjuster_user_id' => Arr::get($this->payload, 'claim.loss_adjuster_user_id'),
            'date_of_loss' => Arr::get($this->payload, 'claim.date_of_loss'),
            'date_adjuster_instructed' => Arr::get($this->payload, 'claim.date_adjuster_instructed'),
            'date_claim_concluded' => Arr::get($this->payload, 'claim.date_claim_concluded'),
            'amount_deductible' => Arr::get($this->payload, 'claim.amount_deductible'),
            'amount_loss_adjusters_fee' => Arr::get($this->payload, 'claim.amount_loss_adjusters_fee'),
            'amount_reserved' => Arr::get($this->payload, 'claim.amount_reserved'),
            'amount_settlement_paid' => Arr::get($this->payload, 'claim.amount_settlement_paid'),
            'amount_claim_reserved' => Arr::get($this->payload, 'claim.amount_claim_reserved'),
            'amount_claim_final' => Arr::get($this->payload, 'claim.amount_claim_final'),
        ];
    }

    public function getStatusID(): ?int
    {
        return (int)Arr::get($this->payload, 'claim.status_id');
    }

    public function getTypeID(): int
    {
        return (int)Arr::get($this->payload, 'claim.type_id');
    }

    public function getSubtypeID(): int
    {
        return (int)Arr::get($this->payload, 'claim.subtype_id');
    }

    public function getFinancialSectionsData(): array
    {
        return Arr::get($this->payload, 'financials.sections', []);
    }

    public function getFilesData(): array
    {
        return Arr::get($this->payload, 'files', []);
    }

    public function addEavObjectIdentifier(string $identifier, string $table, int $id): self
    {
        $this->eav_object_identifiers[] = [
            'identifier' => $identifier,
            'table' => $table,
            'id' => $id,
        ];

        return $this;
    }

    public function getEavObjectIdentifiers(): array
    {
        return $this->eav_object_identifiers;
    }

    public function addEavObject(string $identifier, string $table, int $id, ObjectMetadata $metadata, array $fields): self
    {
        $this->eav_object_collection[] = [
            'identifier' => $identifier,
            'table' => $table,
            'id' => $id,
            'metadata' => $metadata,
            'fields' => $fields,
            'input' => [
                'data' => [],
                'multi_data' => []
            ]
        ];

        return $this;
    }

    public function getEavObjects(): array
    {
        return $this->eav_object_collection;
    }

    public function setEavObjectInput(string $identifier, array $data = [], array $multi_data = []): self
    {
        foreach($this->eav_object_collection as &$object)
        {
            if($object['identifier'] === $identifier)
            {
                $object['input']['data'] = $data;
                $object['input']['multi_data'] = $multi_data;
            }
        }

        return $this;
    }

    public function setClaim(Claim $claim): self
    {
        $this->claim = $claim;

        return $this;
    }

    public function getClaim(): Claim
    {
        if(!($this->claim instanceof Claim))
        {
            throw new InvocationOrderException('Method "getClaim()" called before "setClaim()". No object available', 500);
        }

        return $this->claim;
    }

    public function setClaimRevision(ClaimRevision $revision): self
    {
        $this->claim_revision = $revision;

        return $this;
    }

    public function getClaimRevision(): ClaimRevision
    {
        if(!($this->claim_revision instanceof ClaimRevision))
        {
            throw new InvocationOrderException('Method "getClaimRevision()" called before "setClaimRevision()". No object available', 500);
        }

        return $this->claim_revision;
    }

    public function storeEAVInstanceInfo(array $data): self
    {
        $this->eav_instances[] = $data;

        return $this;
    }

    public function getEAVInstanceInfo(): array
    {
        return $this->eav_instances;
    }

    public function storeEAVValidationErrors(string $identifier, array $errors): self
    {
        $this->eav_validation_errors[$identifier] = $errors;

        return $this;
    }

    public function hasEAVValidationErrors(): bool
    {
        return sizeof($this->eav_validation_errors) > 0;
    }

    public function getEAVValidationErrors(): array
    {
        return $this->eav_validation_errors;
    }

    public function addJunction(Claim2EavInstance $model): self
    {
        $this->junction_collection[] = $model;

        return $this;
    }

    public function getJunctions(): array
    {
        return $this->junction_collection;
    }

    public function addFinancialSection(Claim2Section $model): self
    {
        $this->financial_collection[] = $model;

        return $this;
    }

    public function getFinancialCollection(): array
    {
        return $this->financial_collection;
    }

    public function addUploadedFile(Claim2File $file): self
    {
        $this->uploaded_files[] = $file;

        return $this;
    }

    public function getUploadedFiles(): array
    {
        return $this->uploaded_files;
    }
}
