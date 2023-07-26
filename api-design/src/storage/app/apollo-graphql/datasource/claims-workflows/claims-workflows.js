const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsWorkflows extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimWorkflowListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-workflows`;

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

    async claimWorkflowCreate(uuid, logic, claims_types_uuids, settlements_types_uuids) {
        let uri = `api/v1/claim-workflow/create`;

        let params = {uuid: uuid, logic: logic};

        if (claims_types_uuids !== undefined) {
            params['claims_types_uuids'] = claims_types_uuids;
        }

        if (settlements_types_uuids !== undefined) {
            params['settlements_types_uuids'] = settlements_types_uuids;
        }

        return this.post(uri, params);
    }

    async claimWorkflowReadById(id) {
        let uri = `api/v1/claim-workflow/id/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimWorkflowUpdate(id, uuid, logic, claims_types_uuids, settlements_types_uuids) {
        let uri = `api/v1/claim-workflow/id/${id}`;

        let params = {uuid: uuid, logic: logic};

        if (claims_types_uuids !== undefined) {
            params['claims_types_uuids'] = claims_types_uuids;
        }

        if (settlements_types_uuids !== undefined) {
            params['settlements_types_uuids'] = settlements_types_uuids;
        }

        return this.put(uri, params);
    }

    async claimWorkflowReadDeleteById(id) {
        let uri = `api/v1/claim-workflow/id/${id}`;

        let params = {};

        return this.delete(uri, params);
    }

    async claimWorkflowReadByUuid(uuid) {
        let uri = `api/v1/claim-workflow/uuid/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimWorkflowDeleteByUuid(uuid) {
        let uri = `api/v1/claim-workflow/uuid/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsWorkflows};