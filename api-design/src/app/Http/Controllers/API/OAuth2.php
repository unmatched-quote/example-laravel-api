<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\OAuth2\ClientCredentials;
use App\Http\Actions\API\OAuth2\ClientCredentialsAction;

class OAuth2 extends Controller
{
    public function callback()
    {}

    public function clientCredentialsGrant(ClientCredentials $request, ClientCredentialsAction $action): JsonResponse
    {
        return response()->json(
            $action->execute($request->getUsername(), $request->getPassword())->response()
        );
    }
}
