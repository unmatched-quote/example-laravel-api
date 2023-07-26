const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsLogs extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementLogListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-logs`;

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

    async claimSettlementLogCreate(settlement_id, user_id, log_data) {
        let uri = `api/v1/claim-settlement-log/create`;

        let params = {settlement_id: settlement_id, user_id: user_id, log_data: log_data};

        return this.post(uri, params);
    }

    async claimSettlementLogReadById(id) {
        let uri = `api/v1/claim-settlement-log/${id}`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {ClaimsSettlementsLogs};