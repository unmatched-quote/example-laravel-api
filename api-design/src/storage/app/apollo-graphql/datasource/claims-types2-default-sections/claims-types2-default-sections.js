const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2DefaultSections extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimType2DefaultSectionListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-types-2-default-sections`;

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

    async claimType2DefaultSectionCreate(claim_type_uuid, title, payee_id, date_effective) {
        let uri = `api/v1/claim-type-2-default-section/create`;

        let params = {claim_type_uuid: claim_type_uuid, title: title, payee_id: payee_id, date_effective: date_effective};

        return this.post(uri, params);
    }

    async claimType2DefaultSectionReadByUuid(uuid) {
        let uri = `api/v1/claim-type-2-default-section/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2DefaultSectionUpdateByUuid(uuid, claim_type_uuid, title, payee_id, date_effective) {
        let uri = `api/v1/claim-type-2-default-section/${uuid}`;

        let params = {claim_type_uuid: claim_type_uuid, title: title, payee_id: payee_id, date_effective: date_effective};

        return this.put(uri, params);
    }

    async claimType2DefaultSectionDeleteByUuid(uuid) {
        let uri = `api/v1/claim-type-2-default-section/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2DefaultSections};