<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\ClaimStatus2Eav;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CollectEAVObjectsFromStatus
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $status_id = $state->getStatusID();

        $collection = ClaimStatus2Eav::where('status_id', $status_id)->get([
            'status_id',
            'eav_object_uuid',
            'eav_object_revision_uuid'
        ]);

        $table = (new ClaimStatus2Eav())->getTable();

        foreach($collection->toArray() as $row)
        {
            $state->addEavObjectIdentifier($row['eav_object_uuid'], $table, $row['status_id']);
        }

        return $state;
    }
}
