<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use PDO;
use Illuminate\Support\Arr;
use Buckhill\LibEAV\Accessors\EAVObject;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CollectEAVObjects
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $objects = $state->getEavObjectIdentifiers();
        $accessor = new EAVObject(1);

        foreach($objects as $object)
        {
            $identifier = Arr::get($object, 'identifier');
            $table = Arr::get($object, 'table');
            $fk = Arr::get($object, 'id');

            $metadata = $accessor->readMetadataByUUID($state->pdo, $identifier);
            $fields = $accessor->getFieldListByUUID($state->pdo, $identifier);

            $state->addEavObject($identifier, $table, $fk, $metadata, $fields);
        }

        return $state;
    }
}
