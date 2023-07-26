<?php

namespace App\DTO\Claims;

class ClaimAndRevision
{
    public function __construct(
        public readonly Claim $claim,
        public readonly Revision $revision
    ) {
    }
}
