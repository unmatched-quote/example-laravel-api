const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlements2Files extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlement2FileListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-2-files`;

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

    async claimSettlement2FileCreate(claim_settlement_id, file_name, file_mime_type, settlement_file) {
        let uri = `api/v1/claim-settlement-2-file/create`;

        let params = {claim_settlement_id: claim_settlement_id, file_name: file_name, file_mime_type: file_mime_type, settlement_file: settlement_file};

        return this.post(uri, params);
    }

    async claimSettlement2FileReadById(id) {
        let uri = `api/v1/claim-settlement-2-file/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlement2FileUpdateById(id, claim_settlement_id, file_name, file_mime_type) {
        let uri = `api/v1/claim-settlement-2-file/${id}`;

        let params = {claim_settlement_id: claim_settlement_id, file_name: file_name, file_mime_type: file_mime_type};

        return this.put(uri, params);
    }

    async claimSettlement2FileReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-2-file/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlements2Files};