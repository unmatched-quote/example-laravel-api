const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsPaymentsTemplates extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementPaymentTemplateListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-payments-templates`;

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

    async claimSettlementPaymentTemplateCreate(title, template) {
        let uri = `api/v1/claim-settlement-payment-template/create`;

        let params = {title: title, template: template};

        return this.post(uri, params);
    }

    async claimSettlementPaymentTemplateReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement-payment-template/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementPaymentTemplateUpdateByUuid(uuid, title, template) {
        let uri = `api/v1/claim-settlement-payment-template/${uuid}`;

        let params = {title: title, template: template};

        return this.put(uri, params);
    }

    async claimSettlementPaymentTemplateDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement-payment-template/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsPaymentsTemplates};