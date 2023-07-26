const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2DefaultValues extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimType2DefaultValueListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-types-2-default-values`;

        let params = {};

        if (page !== undefined) {
            params['page'] = page;
        }

        if (limit !== undefined) {
            params['limit'] = limit;
        }

        if (sortBy !== undefined) {
            params['sortBy'] = sortBy;
        }

        if (desc !== undefined) {
            params['desc'] = desc;
        }

        return this.get(uri, params);
    }

    async claimType2DefaultValueCreate(claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective) {
        let uri = `api/v1/claim-type-2-default-value/create`;

        let params = {claim_type_uuid: claim_type_uuid, product_uuid: product_uuid, section_uuids: section_uuids, amount_default_reserve: amount_default_reserve, amount_default_deductible: amount_default_deductible, amount_default_loss_adjusters_fee: amount_default_loss_adjusters_fee, date_effective: date_effective};

        return this.post(uri, params);
    }

    async claimType2DefaultValueReadById(id) {
        let uri = `api/v1/claim-type-2-default-value/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2DefaultValueUpdateById(id, claim_type_uuid, product_uuid, section_uuids, amount_default_reserve, amount_default_deductible, amount_default_loss_adjusters_fee, date_effective) {
        let uri = `api/v1/claim-type-2-default-value/${id}`;

        let params = {claim_type_uuid: claim_type_uuid, product_uuid: product_uuid, section_uuids: section_uuids, amount_default_reserve: amount_default_reserve, amount_default_deductible: amount_default_deductible, amount_default_loss_adjusters_fee: amount_default_loss_adjusters_fee, date_effective: date_effective};

        return this.put(uri, params);
    }

    async claimType2DefaultValueReadDeleteById(id) {
        let uri = `api/v1/claim-type-2-default-value/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2DefaultValues};