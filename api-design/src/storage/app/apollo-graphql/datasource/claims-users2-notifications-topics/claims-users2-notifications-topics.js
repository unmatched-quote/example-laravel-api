const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsUsers2NotificationsTopics extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimUser2NotificationTopicListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-users-2-notifications-topics`;

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

    async claimUser2NotificationTopicCreate(notification_type_id, topic_id, files, date_muted_start, date_muted_end) {
        let uri = `api/v1/claim-user-2-notification-topic/create`;

        let params = {notification_type_id: notification_type_id, topic_id: topic_id};

        if (files !== undefined) {
            params['files'] = files;
        }

        if (date_muted_start !== undefined) {
            params['date_muted_start'] = date_muted_start;
        }

        if (date_muted_end !== undefined) {
            params['date_muted_end'] = date_muted_end;
        }

        return this.post(uri, params);
    }

    async claimUser2NotificationTopicReadById(id) {
        let uri = `api/v1/claim-user-2-notification-topic/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimUser2NotificationTopicUpdateById(id, notification_type_id, topic_id, files, date_muted_start, date_muted_end) {
        let uri = `api/v1/claim-user-2-notification-topic/${id}`;

        let params = {notification_type_id: notification_type_id, topic_id: topic_id};

        if (files !== undefined) {
            params['files'] = files;
        }

        if (date_muted_start !== undefined) {
            params['date_muted_start'] = date_muted_start;
        }

        if (date_muted_end !== undefined) {
            params['date_muted_end'] = date_muted_end;
        }

        return this.put(uri, params);
    }

    async claimUser2NotificationTopicReadDeleteById(id) {
        let uri = `api/v1/claim-user-2-notification-topic/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsUsers2NotificationsTopics};