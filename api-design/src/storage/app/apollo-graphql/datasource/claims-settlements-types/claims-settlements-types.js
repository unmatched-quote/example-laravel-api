const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsTypes extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementTypeListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-types`;

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

    async claimSettlementTypeCreate(title, parent_uuid, accounting_workflow_uuid) {
        let uri = `api/v1/claim-settlement-type/create`;

        let params = {title: title};

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        if (accounting_workflow_uuid !== undefined) {
            params['accounting_workflow_uuid'] = accounting_workflow_uuid;
        }

        return this.post(uri, params);
    }

    async claimSettlementTypeReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement-type/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementTypeUpdateByUuid(uuid, title, parent_uuid, accounting_workflow_uuid) {
        let uri = `api/v1/claim-settlement-type/${uuid}`;

        let params = {title: title};

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        if (accounting_workflow_uuid !== undefined) {
            params['accounting_workflow_uuid'] = accounting_workflow_uuid;
        }

        return this.put(uri, params);
    }

    async claimSettlementTypeDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement-type/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsTypes};