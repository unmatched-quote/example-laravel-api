<?php

namespace App\Models;

use App\Casts\DateTime;
use Illuminate\Support\Carbon;
use App\DTO\Claims\Claim as ClaimDTO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Claim
 *
 * @property int $id
 * @property mixed $uuid
 * @property mixed|null $parent_uuid
 * @property int|null $revision
 * @property string|null $custom_id
 * @property int $policy_id
 * @property string|null $external_ref
 * @property mixed|null $external_ref_hash
 * @property int|null $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @method static \Database\Factories\ClaimFactory factory(...$parameters)
 * @method static Builder|Claim newModelQuery()
 * @method static Builder|Claim newQuery()
 * @method static \Illuminate\Database\Query\Builder|Claim onlyTrashed()
 * @method static Builder|Claim query()
 * @method static Builder|Claim whereCompanyId($value)
 * @method static Builder|Claim whereCreatedAt($value)
 * @method static Builder|Claim whereCustomId($value)
 * @method static Builder|Claim whereDeletedAt($value)
 * @method static Builder|Claim whereExternalRef($value)
 * @method static Builder|Claim whereExternalRefHash($value)
 * @method static Builder|Claim whereId($value)
 * @method static Builder|Claim whereParentUuid($value)
 * @method static Builder|Claim wherePolicyId($value)
 * @method static Builder|Claim whereRevision($value)
 * @method static Builder|Claim whereUpdatedAt($value)
 * @method static Builder|Claim whereUuid($value)
 * @method static \Illuminate\Database\Query\Builder|Claim withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Claim withoutTrashed()
 * @mixin \Eloquent
 */
class Claim extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'parent_uuid',
        'custom_id',
        'policy_id',
        'external_ref',
        'company_id'
    ];

    protected $hidden = [
        'external_ref_hash'
    ];

    protected $table = 'claims_api_claims';

    protected $casts = [
        'created_at' => DateTime::DEFAULT_DATE_TIME_CAST_STRING,
        'updated_at' => DateTime::DEFAULT_DATE_TIME_CAST_STRING,
        'deleted_at' => DateTime::DEFAULT_DATE_TIME_CAST_STRING,
    ];

    public function toDTO(): ClaimDTO
    {
        return new ClaimDTO(...$this->toArray());
    }

    public function getTransitions(array $groupIds): array
    {
        $status = ClaimStatus::whereClaimId($this->id)->first();

        if (is_null($status)) {
            return [];
        }

        $workflows = ClaimWorkflow::whereClaimId($this->id)->get();

        return ClaimWorkflow::getTransitionsFromWorkflows($workflows, $groupIds, $status->id);
    }

    public static function selectAsJsonObjectSQLStatement(string $as, string $table): string
    {
        return <<<EOF
    JSON_OBJECT(
        "id", $table.id,
        "uuid", CAST($table.uuid AS CHAR),
        "parent_uuid", CAST($table.parent_uuid AS CHAR),
        "revision", $table.revision,
        "custom_id", $table.custom_id,
        "policy_id", $table.policy_id,
        "external_ref", $table.external_ref,
        "company_id", $table.company_id,
        "created_at", DATE_FORMAT($table.created_at, "%Y-%m-%d %H:%i:%s"),
        "updated_at", DATE_FORMAT($table.updated_at, "%Y-%m-%d %H:%i:%s"),
        "deleted_at", DATE_FORMAT($table.deleted_at, "%Y-%m-%d %H:%i:%s")
    ) $as
EOF;
    }
}
