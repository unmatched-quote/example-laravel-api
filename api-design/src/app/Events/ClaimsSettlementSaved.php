<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use App\DTO\ClaimsSettlements\ClaimSettlement;

class ClaimsSettlementSaved
{
    use Dispatchable;

    public function __construct(
        public readonly ClaimSettlement $settlementDTO,
    ) {
    }
}
