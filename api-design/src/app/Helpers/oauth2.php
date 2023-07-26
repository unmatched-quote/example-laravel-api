<?php

namespace App\Helpers;

use Lcobucci\JWT\Token\Parser;
use Lcobucci\JWT\UnencryptedToken;
use Illuminate\Support\Facades\Http;
use App\DTO\OAuth2\TokenResponseDTO;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Encoding\CannotDecodeContent;
use Lcobucci\JWT\Token\InvalidTokenStructure;
use Lcobucci\JWT\Token\UnsupportedHeaderFound;
use App\Exceptions\AuthenticationRequiredException;

if(!function_exists('exchangeRefreshToken'))
{
    function exchangeRefreshToken(string $refresh_token): TokenResponseDTO
    {
        $url = sprintf("%s/%s", rtrim(config('oauth2.authstack.url'), '/'), ltrim(config('oauth2.authstack.path'), '/'));

        $params = [
            'grant_type' => 'refresh_token',
            'client_id' => config('oauth2.client_id'),
            'client_secret' => config('oauth2.client_secret'),
            'server_id' => config('oauth2.server_id'),
            'refresh_token' => $refresh_token
        ];

        $result = Http::post($url, $params);

        if(200 !== $result->status())
        {
            throw new AuthenticationRequiredException('Invalid refresh token', 401);
        }

        return new TokenResponseDTO(...$result->json());
    }
}