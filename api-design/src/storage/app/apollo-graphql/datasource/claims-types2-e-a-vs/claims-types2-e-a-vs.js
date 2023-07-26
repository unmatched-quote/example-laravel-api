const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsTypes2EAVs extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async getClaimTypeWithEAVCollection() {
        let uri = `api/v1/claims-types-2-eavs/eav-objects`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2EAVListing(page, limit, sortBy, desc, claimTypeUuids) {
        let uri = `api/v1/claims-types-2-eavs`;

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

        if (claimTypeUuids !== undefined) {
            params['claimTypeUuids'] = claimTypeUuids;
        }

        return this.post(uri, params);
    }

    async claimType2EAVCreate(claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id) {
        let uri = `api/v1/claim-type-2-eav/create`;

        let params = {claim_type_id: claim_type_id, eav_object_uuid: eav_object_uuid, eav_object_revision_uuid: eav_object_revision_uuid};

        if (override_type_id !== undefined) {
            params['override_type_id'] = override_type_id;
        }

        return this.post(uri, params);
    }

    async claimType2EAVReadById(id) {
        let uri = `api/v1/claim-type-2-eav/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimType2EAVUpdateById(id, claim_type_id, eav_object_uuid, eav_object_revision_uuid, override_type_id) {
        let uri = `api/v1/claim-type-2-eav/${id}`;

        let params = {claim_type_id: claim_type_id, eav_object_uuid: eav_object_uuid, eav_object_revision_uuid: eav_object_revision_uuid};

        if (override_type_id !== undefined) {
            params['override_type_id'] = override_type_id;
        }

        return this.put(uri, params);
    }

    async claimType2EAVReadDeleteById(id) {
        let uri = `api/v1/claim-type-2-eav/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsTypes2EAVs};