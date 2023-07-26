const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimTypeListing(page, limit, sortBy, desc, parent_uuid, product_uuid) {
        let uri = `api/v1/claims-types`;

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

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        if (product_uuid !== undefined) {
            params['product_uuid'] = product_uuid;
        }

        return this.get(uri, params);
    }

    async claimTypeCreate(title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default) {
        let uri = `api/v1/claim-type/create`;

        let params = {title: title};

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        if (amount_deductible_default !== undefined) {
            params['amount_deductible_default'] = amount_deductible_default;
        }

        if (amount_loss_adjusters_fee_default !== undefined) {
            params['amount_loss_adjusters_fee_default'] = amount_loss_adjusters_fee_default;
        }

        if (amount_reserve_default !== undefined) {
            params['amount_reserve_default'] = amount_reserve_default;
        }

        return this.post(uri, params);
    }

    async claimTypeReadByUuid(uuid) {
        let uri = `api/v1/claim-type/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimTypeUpdateByUuid(uuid, title, parent_uuid, amount_deductible_default, amount_loss_adjusters_fee_default, amount_reserve_default) {
        let uri = `api/v1/claim-type/${uuid}`;

        let params = {title: title};

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        if (amount_deductible_default !== undefined) {
            params['amount_deductible_default'] = amount_deductible_default;
        }

        if (amount_loss_adjusters_fee_default !== undefined) {
            params['amount_loss_adjusters_fee_default'] = amount_loss_adjusters_fee_default;
        }

        if (amount_reserve_default !== undefined) {
            params['amount_reserve_default'] = amount_reserve_default;
        }

        return this.put(uri, params);
    }

    async claimTypeDeleteByUuid(uuid) {
        let uri = `api/v1/claim-type/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }

    async claimTypeReadAllowedStatusesById(id) {
        let uri = `api/v1/claim-type/${id}/allowed-statuses`;

        let params = {};

        return this.get(uri, params);
    }

    async claimTypeReadProductsByUuid(uuid) {
        let uri = `api/v1/claim-type/${uuid}/products`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {ClaimsTypes};