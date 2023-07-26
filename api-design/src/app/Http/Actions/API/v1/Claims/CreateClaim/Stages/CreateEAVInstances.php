<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use Illuminate\Support\Arr;
use App\Models\ClaimType2EAV;
use App\Models\ClaimStatus2Eav;
use Buckhill\LibEAV\Accessors\EAVObject;
use Buckhill\LibEAV\Models\DataTransfer\Object\ObjectMetadata;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CreateEAVInstances
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $accessor = new EAVObject($state->eav_version);
        $pdo = $state->pdo;
        $claim_id = $state->getClaim()->id;
        $claim_revision = $state->getClaim()->revision;
        $type_table = (new ClaimType2EAV())->getTable();
        $status_table = (new ClaimStatus2Eav())->getTable();

        foreach($state->getEavObjects() as $object)
        {
            /** @var ObjectMetadata $metadata */
            $metadata = Arr::get($object, 'metadata');
            $data = Arr::get($object, 'input.data');
            $multi_data = Arr::get($object, 'input.multi_data');
            $table = Arr::get($object, 'table');
            $id = Arr::get($object, 'id');

            [$status, $response] = $accessor->createInstance(
                $pdo,
                $metadata->id,
                $metadata->revision_id,
                $data,
                $multi_data,
                false // Disable transaction, control it outside this stage
            );

            // Save the data needed to connect eav with claim via junction
            if(200 === $status)
            {
                $state->storeEAVInstanceInfo( [
                    'claim_id' => $claim_id,
                    'revision' => $claim_revision,
                    'instance_id' => $response,
                    'instance_revision' => 1,
                    'type_id' => $table === $type_table ? $id : null,
                    'status_id' => $table === $status_table ? $id : null
                ]);
            }
            else
            {
                $state->storeEAVValidationErrors(Arr::get($object, 'identifier'), $response);
            }
        }

        //@todo Throw an exception in case of validation errors

        return $state;
    }
}
