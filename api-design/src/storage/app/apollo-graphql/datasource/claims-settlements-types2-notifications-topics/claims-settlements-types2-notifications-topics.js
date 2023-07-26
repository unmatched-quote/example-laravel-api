const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsTypes2NotificationsTopics extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementType2NotificationTopicListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-types-2-notifications-topics`;

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

    async claimSettlementType2NotificationTopicCreate(settlement_type_id, topic_id, notification_type_id) {
        let uri = `api/v1/claim-settlement-type-2-notification-topic/create`;

        let params = {settlement_type_id: settlement_type_id, topic_id: topic_id, notification_type_id: notification_type_id};

        return this.post(uri, params);
    }

    async claimSettlementType2NotificationTopicReadById(id) {
        let uri = `api/v1/claim-settlement-type-2-notification-topic/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementType2NotificationTopicUpdateById(id, settlement_type_id, topic_id, notification_type_id) {
        let uri = `api/v1/claim-settlement-type-2-notification-topic/${id}`;

        let params = {settlement_type_id: settlement_type_id, topic_id: topic_id, notification_type_id: notification_type_id};

        return this.put(uri, params);
    }

    async claimSettlementType2NotificationTopicReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-type-2-notification-topic/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsTypes2NotificationsTopics};