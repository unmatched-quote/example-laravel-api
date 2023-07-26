const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsUsers2Notifications extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementUser2NotificationListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-users-2-notifications`;

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

    async claimSettlementUser2NotificationCreate(user_id, settlement_id, users2topic_id, comment) {
        let uri = `api/v1/claim-settlement-user-2-notification/create`;

        let params = {user_id: user_id, settlement_id: settlement_id, users2topic_id: users2topic_id};

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        return this.post(uri, params);
    }

    async claimSettlementUser2NotificationReadById(id) {
        let uri = `api/v1/claim-settlement-user-2-notification/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementUser2NotificationUpdateById(id, user_id, settlement_id, users2topic_id, comment) {
        let uri = `api/v1/claim-settlement-user-2-notification/${id}`;

        let params = {user_id: user_id, settlement_id: settlement_id, users2topic_id: users2topic_id};

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        return this.put(uri, params);
    }

    async claimSettlementUser2NotificationReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-user-2-notification/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsUsers2Notifications};