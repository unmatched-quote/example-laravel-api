<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use App\Models\Claim2Section;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CreateFinancialSections
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        $sections = $state->getFinancialSectionsData();
        $claim_id = $state->getClaim()->id;
        $revision_id = $state->getClaim()->revision;

        foreach($sections as $data)
        {
            $model = Claim2Section::create(array_merge([
                'claim_id' => $claim_id,
                'revision_id' => $revision_id
            ], $data));

            $state->addFinancialSection($model);
        }

        return $state;
    }
}
