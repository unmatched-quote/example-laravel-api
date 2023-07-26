<?php

use App\Http\Controllers\API\OAuth2;
use App\DTO\OAuth2\TokenResponseDTO;
use App\Http\Requests\API\OAuth2\ClientCredentials;

//@todo: implement exchanging authorization code for access token
//Route::get('/oauth2/callback', [OAuth2::class, 'callback']);

Route::post('/api/oauth2/token', [OAuth2::class, 'clientCredentialsGrant'])
    ->input(ClientCredentials::class)
    ->output(TokenResponseDTO::class)
;

Route::post('/api/oauth2/test-token', function(\Illuminate\Http\Request $request)
{
    $jwt = $request->input('access_token');

    \App\Helpers\parseAccessToken($jwt);
});
