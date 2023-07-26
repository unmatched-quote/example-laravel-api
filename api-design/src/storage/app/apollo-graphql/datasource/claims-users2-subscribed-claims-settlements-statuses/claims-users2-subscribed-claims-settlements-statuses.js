const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsUsers2SubscribedClaimsSettlementsStatuses extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimUser2SubscribedClaimSettlementStatusListing(page, limit, sortBy, desc, user_id) {
        let uri = `api/v1/claims-users-2-subscribed-claims-settlements-statuses`;

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

        if (user_id !== undefined) {
            params['user_id'] = user_id;
        }

        return this.get(uri, params);
    }

    async claimUser2SubscribedClaimSettlementStatusCreateMultiple(user_id, status_ids) {
        let uri = `api/v1/claim-user-2-subscribed-claims-settlement-status/create-multiple`;

        let params = {user_id: user_id, status_ids: status_ids};

        return this.post(uri, params);
    }

    async claimUser2SubscribedClaimSettlementStatusCreate(user_id, status_id) {
        let uri = `api/v1/claim-user-2-subscribed-claims-settlement-status/create`;

        let params = {user_id: user_id, status_id: status_id};

        return this.post(uri, params);
    }

    async claimUser2SubscribedClaimSettlementStatusReadById(id) {
        let uri = `api/v1/claim-user-2-subscribed-claims-settlement-status/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimUser2SubscribedClaimSettlementStatusUpdateById(id, user_id, status_id) {
        let uri = `api/v1/claim-user-2-subscribed-claims-settlement-status/${id}`;

        let params = {user_id: user_id, status_id: status_id};

        return this.put(uri, params);
    }

    async claimUser2SubscribedClaimSettlementStatusDeleteById(id) {
        let uri = `api/v1/claim-user-2-subscribed-claims-settlement-status/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsUsers2SubscribedClaimsSettlementsStatuses};