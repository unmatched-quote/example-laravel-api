const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsStatuses extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementStatusListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-statuses`;

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

    async claimSettlementStatusCreate(title) {
        let uri = `api/v1/claim-settlement-status/create`;

        let params = {title: title};

        return this.post(uri, params);
    }

    async claimSettlementStatusReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement-status/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementStatusUpdateByUuid(uuid, title) {
        let uri = `api/v1/claim-settlement-status/${uuid}`;

        let params = {title: title};

        return this.put(uri, params);
    }

    async claimSettlementStatusDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement-status/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsStatuses};