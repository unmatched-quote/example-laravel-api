const {RESTDataSource} = require('apollo-datasource-rest');

class Claims extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimListing(page, limit, sortBy, desc, claimNumber, claimNumberLike, policyIdentifier, policyIdentifierLike, createdFrom, createdTo, status_uuid, type_uuid, subtype_uuid, date_of_loss, handler_user_id, handler_company_id) {
        let uri = `api/v1/claims`;

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

        if (claimNumber !== undefined) {
            params['claimNumber'] = claimNumber;
        }

        if (claimNumberLike !== undefined) {
            params['claimNumberLike'] = claimNumberLike;
        }

        if (policyIdentifier !== undefined) {
            params['policyIdentifier'] = policyIdentifier;
        }

        if (policyIdentifierLike !== undefined) {
            params['policyIdentifierLike'] = policyIdentifierLike;
        }

        if (createdFrom !== undefined) {
            params['createdFrom'] = createdFrom;
        }

        if (createdTo !== undefined) {
            params['createdTo'] = createdTo;
        }

        if (status_uuid !== undefined) {
            params['status_uuid'] = status_uuid;
        }

        if (type_uuid !== undefined) {
            params['type_uuid'] = type_uuid;
        }

        if (subtype_uuid !== undefined) {
            params['subtype_uuid'] = subtype_uuid;
        }

        if (date_of_loss !== undefined) {
            params['date_of_loss'] = date_of_loss;
        }

        if (handler_user_id !== undefined) {
            params['handler_user_id'] = handler_user_id;
        }

        if (handler_company_id !== undefined) {
            params['handler_company_id'] = handler_company_id;
        }

        return this.get(uri, params);
    }

    async claimCreate(policy_id, owner_id, company_id, status_id, type_id, subtype_id, custom_id, external_ref, parent_uuid) {
        let uri = `api/v1/claim/create`;

        let params = {policy_id: policy_id, owner_id: owner_id, status_id: status_id, type_id: type_id, subtype_id: subtype_id};

        if (company_id !== undefined) {
            params['company_id'] = company_id;
        }

        if (custom_id !== undefined) {
            params['custom_id'] = custom_id;
        }

        if (external_ref !== undefined) {
            params['external_ref'] = external_ref;
        }

        if (parent_uuid !== undefined) {
            params['parent_uuid'] = parent_uuid;
        }

        return this.post(uri, params);
    }

    async claimReadWithEavByUuid(uuid) {
        let uri = `api/v1/claim/submission/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimReadById(id, revision_uuid, revision) {
        let uri = `api/v1/claim/id/${id}`;

        let params = {};

        if (revision_uuid !== undefined) {
            params['revision_uuid'] = revision_uuid;
        }

        if (revision !== undefined) {
            params['revision'] = revision;
        }

        return this.get(uri, params);
    }

    async claimReadByUuid(uuid, revision_uuid, revision) {
        let uri = `api/v1/claim/uuid/${uuid}`;

        let params = {};

        if (revision_uuid !== undefined) {
            params['revision_uuid'] = revision_uuid;
        }

        if (revision !== undefined) {
            params['revision'] = revision;
        }

        return this.get(uri, params);
    }

    async claimUpdateByUuid(uuid, owner_id, status_id, type_id, subtype_id) {
        let uri = `api/v1/claim/uuid/${uuid}`;

        let params = {owner_id: owner_id, status_id: status_id, type_id: type_id, subtype_id: subtype_id};

        return this.put(uri, params);
    }

    async claimDeleteByUuid(uuid) {
        let uri = `api/v1/claim/uuid/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }

    async claimReadWithRevisionsByUuid(uuid) {
        let uri = `api/v1/claim/uuid/${uuid}/revisions`;

        let params = {};

        return this.get(uri, params);
    }

    async claimReadTransitionsById(id) {
        let uri = `api/v1/claim/id/${id}/transitions`;

        let params = {};

        return this.get(uri, params);
    }

    async claimReadTransitionsByUuid(uuid) {
        let uri = `api/v1/claim/uuid/${uuid}/transitions`;

        let params = {};

        return this.get(uri, params);
    }

    async claimCommentListing(uuid, page, limit, sortBy, desc, showDeleted, revision_uuid, status_uuid, revision) {
        let uri = `api/v1/claim/uuid/${uuid}/claim-comments`;

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

        if (showDeleted !== undefined) {
            params['showDeleted'] = showDeleted;
        }

        if (revision_uuid !== undefined) {
            params['revision_uuid'] = revision_uuid;
        }

        if (status_uuid !== undefined) {
            params['status_uuid'] = status_uuid;
        }

        if (revision !== undefined) {
            params['revision'] = revision;
        }

        return this.get(uri, params);
    }

    async claimReadAllowedStatusesById(id) {
        let uri = `api/v1/claim/id/${id}/allowed-statuses`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {Claims};