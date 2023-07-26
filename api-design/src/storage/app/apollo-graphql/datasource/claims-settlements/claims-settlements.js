const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlements extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements`;

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

    async claimSettlementCreate(claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id) {
        let uri = `api/v1/claim-settlement/create`;

        let params = {claim_uuid: claim_uuid, company_id: company_id, settlement_type_uuid: settlement_type_uuid, settlement_status_uuid: settlement_status_uuid, date_settlement_agreed: date_settlement_agreed, amount_settlement: amount_settlement};

        if (date_paid !== undefined) {
            params['date_paid'] = date_paid;
        }

        if (date_settlement_period_from !== undefined) {
            params['date_settlement_period_from'] = date_settlement_period_from;
        }

        if (date_settlement_period_to !== undefined) {
            params['date_settlement_period_to'] = date_settlement_period_to;
        }

        if (journal_id !== undefined) {
            params['journal_id'] = journal_id;
        }

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        if (section_id !== undefined) {
            params['section_id'] = section_id;
        }

        return this.post(uri, params);
    }

    async claimSettlementReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement/uuid/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementUpdateByUuid(uuid, claim_uuid, company_id, settlement_type_uuid, settlement_status_uuid, date_settlement_agreed, amount_settlement, date_paid, date_settlement_period_from, date_settlement_period_to, journal_id, comment, section_id) {
        let uri = `api/v1/claim-settlement/uuid/${uuid}`;

        let params = {claim_uuid: claim_uuid, company_id: company_id, settlement_type_uuid: settlement_type_uuid, settlement_status_uuid: settlement_status_uuid, date_settlement_agreed: date_settlement_agreed, amount_settlement: amount_settlement};

        if (date_paid !== undefined) {
            params['date_paid'] = date_paid;
        }

        if (date_settlement_period_from !== undefined) {
            params['date_settlement_period_from'] = date_settlement_period_from;
        }

        if (date_settlement_period_to !== undefined) {
            params['date_settlement_period_to'] = date_settlement_period_to;
        }

        if (journal_id !== undefined) {
            params['journal_id'] = journal_id;
        }

        if (comment !== undefined) {
            params['comment'] = comment;
        }

        if (section_id !== undefined) {
            params['section_id'] = section_id;
        }

        return this.put(uri, params);
    }

    async claimSettlementDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement/uuid/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }

    async claimSettlementReadTransitionsById(id) {
        let uri = `api/v1/claim-settlement/id/${id}/transitions`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementReadTransitionsByUuid(uuid) {
        let uri = `api/v1/claim-settlement/uuid/${uuid}/transitions`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {ClaimsSettlements};