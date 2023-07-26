const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2NotificationsTopics extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimType2NotificationTopicListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-types-2-notifications-topics`;

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

    async claimType2NotificationTopicCreate(claim_type_id, claim_subtype_id, topic_id, notification_type_id) {
        let uri = `api/v1/claim-type-2-notification-topic/create`;

        let params = {claim_type_id: claim_type_id, claim_subtype_id: claim_subtype_id, topic_id: topic_id, notification_type_id: notification_type_id};

        return this.post(uri, params);
    }

    async claimType2NotificationTopicReadById(id) {
        let uri = `api/v1/claim-type-2-notification-topic/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2NotificationTopicUpdateById(id, claim_type_id, claim_subtype_id, topic_id, notification_type_id) {
        let uri = `api/v1/claim-type-2-notification-topic/${id}`;

        let params = {claim_type_id: claim_type_id, claim_subtype_id: claim_subtype_id, topic_id: topic_id, notification_type_id: notification_type_id};

        return this.put(uri, params);
    }

    async claimType2NotificationTopicReadDeleteById(id) {
        let uri = `api/v1/claim-type-2-notification-topic/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2NotificationsTopics};