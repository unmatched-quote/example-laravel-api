<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ViewPolicy
 *
 * @property int $policy_primary_key
 * @property string $custom_id
 * @property string|null $policy_uuid
 * @property int $master_id
 * @property int $parent_id
 * @property int $is_renewal Set to 1 if policy is renewal of an existing system policy
 * @property string|null $date_deleted
 * @property string $date_created
 * @property string|null $date_cancellation_effective
 * @property int $deleted
 * @property int $cancelled
 * @property int $is_live
 * @property int|null $is_renewable
 * @property string|null $cancel_reason
 * @property int|null $is_legacy
 * @property int $num_cyi Number of consecutive years insured
 * @property string $premium_prev_year Original policy premium at the time of its renewal
 * @property string $premium_prev_annualised Original policy premium for the full period without any charges
 * @property int $id
 * @property int $location_id
 * @property int $policy_id
 * @property int|null $revision_id
 * @property int $from_revision_id
 * @property int $owner_id
 * @property int $firm_id
 * @property int $solicitor_id
 * @property int $policyholder_id
 * @property int $policyholder_user_id
 * @property int $product_id
 * @property int $product_revision_id
 * @property int $category_id
 * @property int|null $ratings_id
 * @property int|null $ratings_revision_id
 * @property int|null $ratings_based_on
 * @property int|null $ple_set_id
 * @property int|null $ple_set_revision_id
 * @property int|null $insurer_id
 * @property int $status_id
 * @property int $is_latest
 * @property int $object_instance_id
 * @property int $object_instance_revision_id
 * @property int|null $product_instance_id
 * @property int|null $product_instance_revision_id
 * @property int|null $invoice_id
 * @property int|null $invoice_revision_id
 * @property int $tax_id
 * @property int $tax_revision_id
 * @property string|null $tax_rate
 * @property string|null $date_revision
 * @property string|null $date_inception
 * @property string $date_effective
 * @property string|null $date_expiry
 * @property string|null $date_quote_expiry
 * @property string|null $date_cancelled
 * @property int|null $tax_is_used
 * @property string|null $firm_ref
 * @property int $contract_id
 * @property int $contract_manager_id
 * @property float $amount_total
 * @property string $amount_contract
 * @property float $amount_tax_total
 * @property string|null $amount_taxed final taxed amnt
 * @property string|null $amount_premium base amount after after discounting
 * @property string|null $amount_override
 * @property string|null $amount_base base amount before discounting
 * @property string|null $amount_base_rated base amount from rating engine
 * @property string|null $amount_base_ple
 * @property string|null $amount_commission
 * @property string|null $commission_rate
 * @property int|null $commission_type
 * @property string|null $adjustment_amount
 * @property int|null $adjustment_type
 * @property int|null $var_commission
 * @property int|null $var_commission_type
 * @property string|null $var_commission_amount
 * @property int $commission_id
 * @property int|null $com_included
 * @property float $amount_charges
 * @property float $amount_charges_tax
 * @property int $do_void
 * @property string|null $holder_name
 * @property string|null $holder_date_birth
 * @property string|null $holder_address
 * @property string|null $holder_address_1
 * @property string|null $holder_address_2
 * @property string|null $holder_town
 * @property string|null $holder_county
 * @property string|null $holder_postcode
 * @property string|null $text_custom_1
 * @property string|null $text_custom_2
 * @property string|null $text_custom_3
 * @property string|null $text_custom_4
 * @property string|null $text_custom_5
 * @property int $payment_type_id
 * @property int $is_ddr
 * @property int $channel_id
 * @property int $change_id
 * @property string $amount_total_diff
 * @property string $amount_tax_total_diff
 * @property string $amount_charges_diff
 * @property string $amount_charges_tax_diff
 * @property string $amount_ins_liability_diff
 * @property string $amount_contract_diff
 * @property string $amount_taxed_diff
 * @property string $amount_premium_diff
 * @property string $amount_tax_diff
 * @property string $amount_base_full_diff
 * @property string $amount_tax_full_diff
 * @property string $amount_premium_full_diff
 * @property string $amount_base_diff
 * @property string $amount_commission_diff
 * @property string|null $amount_premium_retained
 * @property string|null $amount_premium_retained_diff
 * @property int|null $quote_referral
 * @property int|null $payment_pending
 * @property int|null $refund_pending
 * @property int|null $mta_quote
 * @property int|null $mta
 * @property int|null $renewal_pending
 * @property int|null $renewal_quote
 * @property int|null $renewal_renewed
 * @property int|null $renewal_ntu
 * @property int|null $renewal_accepted
 * @property int|null $renewal_err_notified
 * @property int|null $renewal_invited
 * @property int|null $renewal_invited_email
 * @property int|null $renewal_invited_post
 * @property int|null $imported
 * @property int|null $imported_err
 * @property string|null $pa_value
 * @property int $pa_value_type
 * @property int $pa_type
 * @property int $pa_source
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy query()
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAdjustmentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAdjustmentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountBaseDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountBaseFullDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountBasePle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountBaseRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountCharges($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountChargesDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountChargesTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountChargesTaxDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountCommissionDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountContract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountContractDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountInsLiabilityDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountOverride($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountPremium($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountPremiumDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountPremiumFullDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountPremiumRetained($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountPremiumRetainedDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxFullDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxTotalDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTaxedDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereAmountTotalDiff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCancelReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereChangeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereComIncluded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCommissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCommissionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereContractId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereContractManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereCustomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateCancellationEffective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateEffective($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateInception($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateQuoteExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDateRevision($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDeleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereDoVoid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereFirmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereFirmRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereFromRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderCounty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderDateBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereHolderTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereImported($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereImportedErr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereInsurerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereInvoiceRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsDdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsLatest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsLegacy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsLive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsRenewable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereIsRenewal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereMasterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereMta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereMtaQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereNumCyi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereObjectInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereObjectInstanceRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaValueType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaymentPending($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePaymentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePleSetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePleSetRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePolicyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePolicyPrimaryKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePolicyUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePolicyholderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePolicyholderUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePremiumPrevAnnualised($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy wherePremiumPrevYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereProductInstanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereProductInstanceRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereProductRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereQuoteReferral($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRatingsBasedOn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRatingsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRatingsRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRefundPending($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalAccepted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalErrNotified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalInvited($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalInvitedEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalInvitedPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalNtu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalPending($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRenewalRenewed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereSolicitorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTaxIsUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTaxRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTaxRevisionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTextCustom1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTextCustom2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTextCustom3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTextCustom4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereTextCustom5($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereVarCommission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereVarCommissionAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ViewPolicy whereVarCommissionType($value)
 * @mixin \Eloquent
 */
class ViewPolicy extends Model
{
    protected $connection = 'eav';

    protected $table = 'view_policies_latest';
}
