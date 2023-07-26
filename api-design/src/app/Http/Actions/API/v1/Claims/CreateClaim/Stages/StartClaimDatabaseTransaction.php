<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use Illuminate\Support\Facades\DB;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class StartClaimDatabaseTransaction
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        // Start the transaction using the claim database connection
        if(!DB::connection()->getPdo()->inTransaction())
        {
            DB::connection()->getPdo()->beginTransaction();
        }

        // Start EAV transaction
        if(!$state->pdo->inTransaction())
        {
            $state->pdo->beginTransaction();
        }

        return $state;
    }
}
