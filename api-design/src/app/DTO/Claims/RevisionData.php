<?php

namespace App\DTO\Claims;

class RevisionData
{
    public function __construct(
        public readonly int $id,
        public readonly string $uuid,
        public readonly int $claim_id,
        public readonly int $revision,
        public readonly int $owner_id,
        public readonly int $status_id,
        public readonly int $status_eav_object_id,
        public readonly int $status_eav_object_revision_id,
        public readonly int $status_eav_object_instance_id,
        public readonly int $status_eav_object_instance_revision_id,
        public readonly int $type_id,
        public readonly int $subtype_id,
        public readonly int $eav_object_id,
        public readonly int $eav_object_revision_id,
        public readonly int $eav_object_instance_id,
        public readonly int $eav_object_instance_revision_id,
        public readonly int $handler_company_id,
        public readonly int $handler_user_id,
        public readonly int $payee_id,
        public readonly int $loss_adjuster_company_id,
        public readonly int $loss_adjuster_user_id,
        public readonly string $date_of_loss,
        public readonly string $date_adjuster_instructed,
        public readonly string $date_claim_concluded,
        public readonly float $amount_deductible,
        public readonly float $amount_loss_adjusters_fee,
        public readonly float $amount_reserved,
        public readonly float $amount_settlement_paid,
        public readonly float $amount_claim_reserved,
        public readonly float $amount_claim_final,
        public readonly string $status_uuid,
        public readonly string $type_uuid,
        public readonly string $subtype_uuid,
        public readonly ?string $created_at = null,
        public readonly ?string $updated_at = null,
        public readonly ?string $deleted_at = null,
    ) {
    }
}
