const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsRecoveriesStatuses extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementRecoveryStatusListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-recoveries-statuses`;

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

    async claimSettlementRecoveryStatusCreate(title) {
        let uri = `api/v1/claim-settlement-recovery-status/create`;

        let params = {title: title};

        return this.post(uri, params);
    }

    async claimSettlementRecoveryStatusReadById(id) {
        let uri = `api/v1/claim-settlement-recovery-status/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementRecoveryStatusUpdateByUuid(uuid, title) {
        let uri = `api/v1/claim-settlement-recovery-status/{id}`;

        let params = {title: title};

        return this.put(uri, params);
    }

    async claimSettlementRecoveryStatusDeleteByUuid(id) {
        let uri = `api/v1/claim-settlement-recovery-status/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsRecoveriesStatuses};