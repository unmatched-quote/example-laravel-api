<?php

namespace App\Events;

use App\DTO\Claims\Claim;
use App\DTO\Claims\Revision;
use Illuminate\Foundation\Events\Dispatchable;

class ClaimsRevisionSaved
{
    use Dispatchable;

    public function __construct(
        public readonly Claim $claimDTO,
        public readonly Revision $revisionDTO
    ) {
    }
}
