const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2Products extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimType2ProductListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-types-2-products`;

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

    async claimType2ProductCreate(claim_type_uuid, product_uuid) {
        let uri = `api/v1/claim-type-2-product/create`;

        let params = {claim_type_uuid: claim_type_uuid, product_uuid: product_uuid};

        return this.post(uri, params);
    }

    async claimType2ProductReadById(id) {
        let uri = `api/v1/claim-type-2-product/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2ProductUpdateById(id, claim_type_uuid, product_uuid) {
        let uri = `api/v1/claim-type-2-product/${id}`;

        let params = {claim_type_uuid: claim_type_uuid, product_uuid: product_uuid};

        return this.put(uri, params);
    }

    async claimType2ProductReadDeleteById(id) {
        let uri = `api/v1/claim-type-2-product/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2Products};