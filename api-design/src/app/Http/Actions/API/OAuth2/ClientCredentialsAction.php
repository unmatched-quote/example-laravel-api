<?php

namespace App\Http\Actions\API\OAuth2;

use Illuminate\Support\Facades\Http;
use App\Exceptions\AuthenticationRequiredException;

class ClientCredentialsAction
{
    protected array $response = [];

    public function execute(string $username, string $password): self
    {
        $params = $this->getPostParams($username, $password);

        $url = $this->getApiUrl();

        $result = Http::post($url, $params);

        if(200 !== $result->status())
        {
            throw new AuthenticationRequiredException('Invalid credentials');
        }

        $this->response = $result->json();

        return $this;
    }

    public function response(): array
    {
        return $this->response;
    }

    public function getApiUrl(): string
    {
        return sprintf("%s/%s", $this->getAuthstackUrl(), $this->getAuthstackApiPath());
    }

    public function getAuthstackUrl(): string
    {
        return rtrim(config('oauth2.authstack.url'), '/');
    }

    public function getAuthstackApiPath(): string
    {
        return ltrim(config('oauth2.authstack.path'), '/');
    }

    public function getPostParams(string $username, string $password): array
    {
        return array_merge($this->getClientCredentialsParams(), [
            'username' => $username,
            'password' => $password
        ]);
    }

    public function getClientCredentialsParams(): array
    {
        return [
            'client_id' => config('oauth2.client_id'),
            'server_id' => config('oauth2.server_id'),
            'client_secret' => config('oauth2.client_secret'),
            'grant_type' => config('oauth2.authstack.grant_type'),
        ];
    }
}
