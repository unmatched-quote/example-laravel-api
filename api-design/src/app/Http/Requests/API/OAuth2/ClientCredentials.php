<?php

namespace App\Http\Requests\API\OAuth2;

use Illuminate\Foundation\Http\FormRequest;

class ClientCredentials extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => ['required', 'max:255'],
            'password' => ['required', 'max:255'],
        ];
    }

    public function getUsername(): string
    {
        return $this->input('username');
    }

    public function getPassword(): string
    {
        return $this->input('password');
    }

    public static function description(): array
    {
        return [
            'request' => [
                'swagger' => [
                    'tags' => [
                        'OAuth2 Operations',
                    ],
                    'summary' => 'Get an access token (and optional refresh token) from Authstack using OAuth2 client_credentials Grant',
                    'operationId' => 'oauth2-client-credentials',
                    'requestBody' => [
                        'required' => true,
                        'content' => [
                            'application/x-www-form-urlencoded',
                        ],
                    ],
                ],
                'graphql' => [
                    'datasource' => 'OAuth2',
                    'queryName' => 'getAccessTokenViaClientCredentialsGrant',
                ],
            ],

            'parameters' => [
                'username' => [
                    'swagger' => [
                        'required' => true,
                        'in' => 'body',
                        'schema' => [
                            'type' => 'string',
                        ],
                        'description' => 'Username',
                    ],
                    'graphql' => [
                        'in' => 'body',
                        'type' => 'String',
                    ],
                ],
                'password' => [
                    'swagger' => [
                        'required' => true,
                        'in' => 'body',
                        'schema' => [
                            'type' => 'password',
                        ],
                        'description' => 'Password',
                    ],
                    'graphql' => [
                        'in' => 'body',
                        'type' => 'String',
                    ],
                ],
            ],
        ];
    }
}
