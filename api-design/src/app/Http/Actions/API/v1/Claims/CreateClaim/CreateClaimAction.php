<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim;

use Buckhill\LibEAV\Pipeline;
use Illuminate\Support\Facades\DB;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\UploadFiles;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CollectEAVInput;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\ValidateEAVInput;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CollectEAVObjects;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CreateClaimRecord;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\RefreshClaimModel;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CreateEAVInstances;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CreateFinancialSections;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CollectEAVObjectsFromType;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CreateClaimRevisionRecord;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CreateJunctionConnections;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CollectEAVObjectsFromStatus;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\StartClaimDatabaseTransaction;
use App\Http\Actions\API\v1\Claims\CreateClaim\Stages\CommitClaimDatabaseTransaction;
use function Buckhill\LibEAV\Functions\detect_version;

class CreateClaimAction
{
    protected array $response = [];

    public function execute(array $payload): self
    {
        $pdo = DB::connection('eav')->getPdo();

        $pipeline = new Pipeline();

        $state = new CreateClaimState(
            $payload,
            $pdo,
            detect_version($pdo)
        );

        $this->response = $pipeline
            ->send($state)
            ->through([
                // Prepare the input stages
                CollectEAVObjectsFromStatus::class,
                CollectEAVObjectsFromType::class,
                CollectEAVObjects::class,
                CollectEAVInput::class,
                ValidateEAVInput::class,

                // Start the db tx
                StartClaimDatabaseTransaction::class,

                // Insert claim related records
                CreateClaimRecord::class,
                CreateClaimRevisionRecord::class,
                RefreshClaimModel::class,

                // Insert dependent records (eav, financials, files)
                CreateEAVInstances::class,
                CreateJunctionConnections::class,
                CreateFinancialSections::class,
                UploadFiles::class,

                // Commit
                CommitClaimDatabaseTransaction::class,
            ])
            ->then(function(CreateClaimState $state)
            {
                return [
                    'claim' => [
                        'id' => $state->getClaim()->id,
                        'revision' => $state->getClaim()->revision
                    ],
                    'eav' => array_map(function(array $instance) {
                        return [
                            'instance_id' => $instance['instance_id'],
                            'revision' => $instance['instance_revision'],
                            'type_id' => $instance['type_id'],
                            'status_id' => $instance['status_id'],
                        ];
                    }, $state->getEAVInstanceInfo())
                ];
            })
        ;

        return $this;
    }

    public function getResponse(): array
    {
        return $this->response;
    }
}
