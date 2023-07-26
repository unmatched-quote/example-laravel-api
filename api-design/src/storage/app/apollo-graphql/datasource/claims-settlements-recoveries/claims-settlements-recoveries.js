const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlementsRecoveries extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlementRecoveryListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-recoveries`;

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

    async claimSettlementRecoveryCreate(company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at) {
        let uri = `api/v1/claim-settlement-recovery/create`;

        let params = {company_id: company_id, journal_id: journal_id, settlement_rec_status_id: settlement_rec_status_id, settlement_rec_type_id: settlement_rec_type_id, amount_settlement_recovery: amount_settlement_recovery, date_range_end: date_range_end};

        if (comments !== undefined) {
            params['comments'] = comments;
        }

        if (date_range_begin !== undefined) {
            params['date_range_begin'] = date_range_begin;
        }

        if (date_transactions !== undefined) {
            params['date_transactions'] = date_transactions;
        }

        if (finalised_at !== undefined) {
            params['finalised_at'] = finalised_at;
        }

        return this.post(uri, params);
    }

    async claimSettlementRecoveryReadByUuid(uuid) {
        let uri = `api/v1/claim-settlement-recovery/${uuid}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlementRecoveryUpdateByUuid(uuid, company_id, journal_id, settlement_rec_status_id, settlement_rec_type_id, amount_settlement_recovery, comments, date_range_begin, date_range_end, date_transactions, finalised_at) {
        let uri = `api/v1/claim-settlement-recovery/${uuid}`;

        let params = {company_id: company_id, journal_id: journal_id, settlement_rec_status_id: settlement_rec_status_id, settlement_rec_type_id: settlement_rec_type_id, amount_settlement_recovery: amount_settlement_recovery, date_range_end: date_range_end};

        if (comments !== undefined) {
            params['comments'] = comments;
        }

        if (date_range_begin !== undefined) {
            params['date_range_begin'] = date_range_begin;
        }

        if (date_transactions !== undefined) {
            params['date_transactions'] = date_transactions;
        }

        if (finalised_at !== undefined) {
            params['finalised_at'] = finalised_at;
        }

        return this.put(uri, params);
    }

    async claimSettlementRecoveryDeleteByUuid(uuid) {
        let uri = `api/v1/claim-settlement-recovery/${uuid}`;

        let params = {};

        return this.delete(uri, params);
    }

    async claimSettlementRecoverySetSettlements(settlement_ids, from_account_id, to_account_id, is_paid, journal_id) {
        let uri = `api/v1/claim-settlement-recovery/{uuid}/set-settlements`;

        let params = {settlement_ids: settlement_ids, from_account_id: from_account_id, to_account_id: to_account_id, is_paid: is_paid};

        if (journal_id !== undefined) {
            params['journal_id'] = journal_id;
        }

        return this.post(uri, params);
    }
}

module.exports = {ClaimsSettlementsRecoveries};