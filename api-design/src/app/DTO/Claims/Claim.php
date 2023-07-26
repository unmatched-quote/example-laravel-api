<?php

namespace App\DTO\Claims;

class Claim
{
    public function __construct(
        public readonly int $id,
        public readonly string $uuid,
        public readonly int $policy_id,
        public readonly int $revision,
        public readonly ?string $parent_uuid = null,
        public readonly ?string $custom_id = null,
        public readonly ?string $external_ref = null,
        public readonly ?int $company_id = null,
        public readonly ?string $created_at = null,
        public readonly ?string $updated_at = null,
        public readonly ?string $deleted_at = null
    ) {
    }
}
