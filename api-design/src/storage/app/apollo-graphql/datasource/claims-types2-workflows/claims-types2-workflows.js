const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2Workflows extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimType2WorkflowListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-types-2-workflows`;

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

    async claimType2WorkflowCreate(type_uuid, workflow_uuid) {
        let uri = `api/v1/claim-type-2-workflow/create`;

        let params = {type_uuid: type_uuid, workflow_uuid: workflow_uuid};

        return this.post(uri, params);
    }

    async claimType2WorkflowReadById(id) {
        let uri = `api/v1/claim-type-2-workflow/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2WorkflowUpdateById(id, type_uuid, workflow_uuid) {
        let uri = `api/v1/claim-type-2-workflow/${id}`;

        let params = {type_uuid: type_uuid, workflow_uuid: workflow_uuid};

        return this.put(uri, params);
    }

    async claimType2WorkflowReadDeleteById(id) {
        let uri = `api/v1/claim-type-2-workflow/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2Workflows};