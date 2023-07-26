<?php

namespace App\DTO\Claims;

class ClaimAndRevisionData
{
    public readonly Claim $claim_data;

    public readonly RevisionData $revision_data;

    public function __construct(
        array $claim_data,
        array $revision_data,
    ) {
        $this->claim_data = new Claim(...$claim_data);

        $this->revision_data = new RevisionData(...$revision_data);
    }
}
