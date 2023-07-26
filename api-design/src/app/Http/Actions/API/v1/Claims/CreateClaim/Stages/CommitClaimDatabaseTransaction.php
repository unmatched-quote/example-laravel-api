<?php

namespace App\Http\Actions\API\v1\Claims\CreateClaim\Stages;

use Illuminate\Support\Facades\DB;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimState;

class CommitClaimDatabaseTransaction
{
    public function handle(CreateClaimState $state): CreateClaimState
    {
        // Start the transaction using the claim database connection
        $result = DB::connection()->getPdo()->commit();

        // Commit EAV transaction if claims one was successful
        if($result)
        {
            $state->pdo->commit();
        }

        return $state;
    }
}
