const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsNotificationsTopics extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimNotificationTopicListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-notifications-topics`;

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

    async claimNotificationTopicCreate(title, driver_logic) {
        let uri = `api/v1/claim-notification-topic/create`;

        let params = {title: title, driver_logic: driver_logic};

        return this.post(uri, params);
    }

    async claimNotificationTopicReadById(id) {
        let uri = `api/v1/claim-notification-topic/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimNotificationTopicUpdateById(id, title, driver_logic) {
        let uri = `api/v1/claim-notification-topic/{id}`;

        let params = {id: id, title: title, driver_logic: driver_logic};

        return this.put(uri, params);
    }

    async claimNotificationTopicReadDeleteById(id) {
        let uri = `api/v1/claim-notification-topic/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsNotificationsTopics};