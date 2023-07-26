const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsNotificationsTemplates extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementNotificationTemplateListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-notifications-templates`;

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

    async claimSettlementNotificationTemplateCreate(title, status_id, type, template) {
        let uri = `api/v1/claim-settlement-notification-template/create`;

        let params = {title: title, status_id: status_id, type: type, template: template};

        return this.post(uri, params);
    }

    async claimSettlementNotificationTemplateReadById(id) {
        let uri = `api/v1/claim-settlement-notification-template/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementNotificationTemplateUpdateById(id, title, status_id, type, template) {
        let uri = `api/v1/claim-settlement-notification-template/${id}`;

        let params = {title: title, status_id: status_id, type: type, template: template};

        return this.put(uri, params);
    }

    async claimSettlementNotificationTemplateReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-notification-template/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsNotificationsTemplates};