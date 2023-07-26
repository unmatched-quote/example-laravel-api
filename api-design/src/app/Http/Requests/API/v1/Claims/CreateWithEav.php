<?php

namespace App\Http\Requests\API\v1\Claims;

use Illuminate\Foundation\Http\FormRequest;

class CreateWithEav extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'claim.policy_id' => 'required',
            'claim.external_ref' => 'required',
            'claim.company_id' => 'required',
            // 'owner_id' => 'required',
            'claim.status_id' => 'required',
            'claim.type_id' => 'required',
            'claim.subtype_id' => 'required',
            'claim.handler_company_id' => 'required',
            'claim.handler_user_id' => 'required',
            // 'payee_id' => 'required',
            'claim.loss_adjuster_company_id' => 'required',
            'claim.loss_adjuster_user_id' => 'required',
            'claim.date_of_loss' => ['required', 'date_format:Y-m-d H:i:s'],
            'claim.date_adjuster_instructed' => ['required', 'date_format:Y-m-d H:i:s'],
            'claim.amount_deductible' => ['required', 'numeric'],
            'claim.amount_loss_adjusters_fee' => ['required', 'numeric'],
            'claim.amount_reserved' => ['required', 'numeric'],
        ];
    }

    public function getPayload(): array
    {
        return [
            // Saved to `claims` table
            'claim' => [
                'custom_id' => $this->input('claim.custom_id'),
                'policy_id' => (int)$this->input('claim.policy_id'),
                'external_ref' => $this->input('claim.external_ref'),
                'company_id' => (int)$this->input('claim.company_id')
            ],

            // Saved to `claims_api_revisions` table
            'revision' => [
                'status_id' => (int)$this->input('claim.status_id'),
                'type_id' => (int)$this->input('claim.type_id'),
                'subtype_id' => (int)$this->input('claim.subtype_id'),
                'handler_company_id' => (int)$this->input('claim.handler_company_id'),
                'handler_user_id' => (int)$this->input('claim.handler_user_id'),
                'payee_id' => (int)$this->input('claim.payee_id'),
                'loss_adjuster_company_id' => (int)$this->input('claim.loss_adjuster_company_id'),
                'loss_adjuster_user_id' => (int)$this->input('claim.loss_adjuster_user_id'),
                'date_of_loss' => $this->input('claim.date_of_loss'),
                'date_adjuster_instructed' => $this->input('claim.date_adjuster_instructed'),
                'date_claim_concluded' => $this->input('claim.date_claim_concluded'),
                'amount_deductible' => (float)$this->input('claim.amount_deductible'),
                'amount_loss_adjusters_fee' => (float)$this->input('claim.amount_loss_adjusters_fee'),
                'amount_reserved' => (float)$this->input('claim.amount_reserved'),
                'amount_settlement_paid' => (float)$this->input('claim.amount_settlement_paid'),
                'amount_claim_reserved' => (float)$this->input('claim.amount_claim_reserved'),
                'amount_claim_final' => (float)$this->input('claim.amount_claim_final'),
            ],

            // Saved to EAV
            'eav' => $this->input('eav'),

            // Saved to `claims_api_claims2sections`
            'financials' => $this->input('financials'),

            //
            'files' => $this->input('files')
        ];
    }
}
