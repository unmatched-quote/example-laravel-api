<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\ClaimType2EAV;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CollectEAVObjectsFromType
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $in = [$state->getTypeID(), $state->getSubtypeID()];

        $collection = ClaimType2EAV::whereIn('claim_type_id', $in)->get(['claim_type_id', 'eav_object_uuid']);

        $table = (new ClaimType2EAV())->getTable();

        foreach($collection->toArray() as $row)
        {
            $state->addEavObjectIdentifier(
                $row['eav_object_uuid'],
                $table,
                $row['claim_type_id']
            );
        }

        return $state;
    }
}
