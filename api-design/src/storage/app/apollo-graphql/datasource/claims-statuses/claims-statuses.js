const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsStatuses extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimStatusListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-statuses`;

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

    async claimStatusCreate(title) {
        let uri = `api/v1/claim-status/create`;

        let params = {title: title};

        return this.post(uri, params);
    }

    async claimStatusReadByUuid(uuid) {
        let uri = `api/v1/claim-status/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimStatusUpdateByUuid(uuid, title) {
        let uri = `api/v1/claim-status/${uuid}`;

        let params = {title: title};

        return this.put(uri, params);
    }

    async claimStatusDeleteByUuid(uuid) {
        let uri = `api/v1/claim-status/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsStatuses};