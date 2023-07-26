<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\v1\Claims\CreateWithEav;
use App\Http\Actions\API\v1\Claims\CreateClaim\CreateClaimAction;

class ClaimsController extends Controller
{
    public function createWithEav(CreateWithEav $request, CreateClaimAction $action): JsonResponse
    {
        return response()->json(
            $action
                ->execute($request->getPayload())
                ->getResponse()
        );
    }
}
