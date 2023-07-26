const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsRecoveriesTypes extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementRecoveryTypeListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-recoveries-types`;

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

    async claimSettlementRecoveryTypeCreate(title, accounting_workflow_uuid, section_id) {
        let uri = `api/v1/claim-settlement-recovery-type/create`;

        let params = {title: title, accounting_workflow_uuid: accounting_workflow_uuid};

        if (section_id !== undefined) {
            params['section_id'] = section_id;
        }

        return this.post(uri, params);
    }

    async claimSettlementRecoveryTypeReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement-recovery-type/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementRecoveryTypeUpdateByUuid(uuid, title, accounting_workflow_uuid, section_id) {
        let uri = `api/v1/claim-settlement-recovery-type/${uuid}`;

        let params = {title: title, accounting_workflow_uuid: accounting_workflow_uuid};

        if (section_id !== undefined) {
            params['section_id'] = section_id;
        }

        return this.put(uri, params);
    }

    async claimSettlementRecoveryTypeDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement-recovery-type/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlementsRecoveriesTypes};