const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsTypes2Workflows extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementType2WorkflowListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-types-2-workflows`;

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

    async claimSettlementType2WorkflowCreate(settlement_type_uuid, workflow_uuid) {
        let uri = `api/v1/claim-settlement-type-2-workflow/create`;

        let params = {settlement_type_uuid: settlement_type_uuid, workflow_uuid: workflow_uuid};

        return this.post(uri, params);
    }

    async claimSettlementType2WorkflowReadById(id) {
        let uri = `api/v1/claim-settlement-type-2-workflow/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementType2WorkflowUpdateById(id, settlement_type_uuid, workflow_uuid) {
        let uri = `api/v1/claim-settlement-type-2-workflow/${id}`;

        let params = {settlement_type_uuid: settlement_type_uuid, workflow_uuid: workflow_uuid};

        return this.put(uri, params);
    }

    async claimSettlementType2WorkflowReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-type-2-workflow/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsTypes2Workflows};