const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsUsers2Notifications extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimUser2NotificationListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-users-2-notifications`;

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

    async claimUser2NotificationCreate(user_id, claim_id, users2topic_id, comment) {
        let uri = `api/v1/claim-user-2-notification/create`;

        let params = {user_id: user_id, claim_id: claim_id, users2topic_id: users2topic_id};

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        return this.post(uri, params);
    }

    async claimUser2NotificationReadById(id) {
        let uri = `api/v1/claim-user-2-notification/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimUser2NotificationUpdateById(id, user_id, claim_id, users2topic_id, comment) {
        let uri = `api/v1/claim-user-2-notification/${id}`;

        let params = {user_id: user_id, claim_id: claim_id, users2topic_id: users2topic_id};

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        return this.put(uri, params);
    }

    async claimUser2NotificationReadDeleteById(id) {
        let uri = `api/v1/claim-user-2-notification/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsUsers2Notifications};