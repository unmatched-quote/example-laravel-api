const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsNotificationsScheduledTasks extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimNotificationScheduledTaskListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-notifications-scheduled-tasks`;

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

    async claimNotificationScheduledTaskCreate(title, schedule, logic) {
        let uri = `api/v1/claim-notification-scheduled-task/create`;

        let params = {title: title, schedule: schedule, logic: logic};

        return this.post(uri, params);
    }

    async claimNotificationScheduledTaskReadByUuid(uuid) {
        let uri = `api/v1/claim-notification-scheduled-task/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimNotificationScheduledTaskUpdateByUuid(uuid, title, schedule, logic) {
        let uri = `api/v1/claim-notification-scheduled-task/${uuid}`;

        let params = {title: title, schedule: schedule, logic: logic};

        return this.put(uri, params);
    }

    async claimNotificationScheduledTaskDeleteByUuid(uuid) {
        let uri = `api/v1/claim-notification-scheduled-task/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsNotificationsScheduledTasks};