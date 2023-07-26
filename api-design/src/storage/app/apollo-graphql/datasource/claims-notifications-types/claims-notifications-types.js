const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsNotificationsTypes extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimNotificationTypeListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-notifications-types`;

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

    async claimNotificationTypeCreate(title, duration, is_summarised) {
        let uri = `api/v1/claim-notification-type/create`;

        let params = {title: title, duration: duration, is_summarised: is_summarised};

        return this.post(uri, params);
    }

    async claimNotificationTypeReadById(id) {
        let uri = `api/v1/claim-notification-type/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimNotificationTypeUpdateById(id, title, duration, is_summarised) {
        let uri = `api/v1/claim-notification-type/${id}`;

        let params = {title: title, duration: duration, is_summarised: is_summarised};

        return this.put(uri, params);
    }

    async claimNotificationTypeReadDeleteById(id) {
        let uri = `api/v1/claim-notification-type/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsNotificationsTypes};