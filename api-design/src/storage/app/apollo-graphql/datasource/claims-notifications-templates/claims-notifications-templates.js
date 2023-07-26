const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsNotificationsTemplates extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimNotificationTemplateListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-notifications-templates`;

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

    async claimNotificationTemplateCreate(title, status_id, type, template) {
        let uri = `api/v1/claim-notification-template/create`;

        let params = {title: title, status_id: status_id, type: type, template: template};

        return this.post(uri, params);
    }

    async claimNotificationTemplateReadById(id) {
        let uri = `api/v1/claim-notification-template/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimNotificationTemplateUpdateById(id, title, status_id, type, template) {
        let uri = `api/v1/claim-notification-template/${id}`;

        let params = {title: title, status_id: status_id, type: type, template: template};

        return this.put(uri, params);
    }

    async claimNotificationTemplateReadDeleteById(id) {
        let uri = `api/v1/claim-notification-template/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsNotificationsTemplates};