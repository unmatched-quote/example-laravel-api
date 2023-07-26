const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsStatuses2EAVs extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimStatus2EAVListing(page, limit, sortBy, desc, status_uuid) {
        let uri = `api/v1/claims-statuses-2-eavs`;

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

        if (status_uuid !== undefined) {
            params['status_uuid'] = status_uuid;
        }

        return this.post(uri, params);
    }

    async claimStatus2EAVCreate(status_uuid, eav_object_uuid, eav_object_revision_uuid) {
        let uri = `api/v1/claim-status-2-eav/create`;

        let params = {status_uuid: status_uuid, eav_object_uuid: eav_object_uuid, eav_object_revision_uuid: eav_object_revision_uuid};

        return this.post(uri, params);
    }

    async claimStatus2EAVReadById(id) {
        let uri = `api/v1/claim-status-2-eav/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimStatus2EAVUpdateById(id, status_uuid, eav_object_uuid, eav_object_revision_uuid) {
        let uri = `api/v1/claim-status-2-eav/${id}`;

        let params = {status_uuid: status_uuid, eav_object_uuid: eav_object_uuid, eav_object_revision_uuid: eav_object_revision_uuid};

        return this.put(uri, params);
    }

    async claimStatus2EAVDeleteById(id) {
        let uri = `api/v1/claim-status-2-eav/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsStatuses2EAVs};