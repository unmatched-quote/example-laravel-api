<?php

namespace App\DTO\OAuth2;

class TokenResponseDTO
{
    public function __construct(
        public readonly string $access_token,
        public readonly int $expires_in,
        public readonly string $refresh_token,
        public readonly int $refresh_token_expires_in
    ){}
}
