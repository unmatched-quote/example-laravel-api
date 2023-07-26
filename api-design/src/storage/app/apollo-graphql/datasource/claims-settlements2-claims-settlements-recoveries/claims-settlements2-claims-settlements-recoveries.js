const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsSettlements2ClaimsSettlementsRecoveries extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimSettlement2ClaimSettlementRecoveryListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-settlements-2-claims-settlements-recoveries`;

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

    async claimSettlement2ClaimSettlementRecoveryCreate(settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id) {
        let uri = `api/v1/claim-settlement-2-claim-settlement-recovery/create`;

        let params = {settlement_id: settlement_id, settlement_recovery_id: settlement_recovery_id, from_account_id: from_account_id, to_account_id: to_account_id, is_paid: is_paid};

        if (journal_id !== undefined) {
            params['journal_id'] = journal_id;
        }

        return this.post(uri, params);
    }

    async claimSettlement2ClaimSettlementRecoveryReadById(id) {
        let uri = `api/v1/claim-settlement-2-claim-settlement-recovery/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimSettlement2ClaimSettlementRecoveryUpdateById(id, settlement_id, settlement_recovery_id, from_account_id, to_account_id, is_paid, journal_id) {
        let uri = `api/v1/claim-settlement-2-claim-settlement-recovery/${id}`;

        let params = {settlement_id: settlement_id, settlement_recovery_id: settlement_recovery_id, from_account_id: from_account_id, to_account_id: to_account_id, is_paid: is_paid};

        if (journal_id !== undefined) {
            params['journal_id'] = journal_id;
        }

        return this.put(uri, params);
    }

    async claimSettlement2ClaimSettlementRecoveryReadDeleteById(id) {
        let uri = `api/v1/claim-settlement-2-claim-settlement-recovery/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsSettlements2ClaimsSettlementsRecoveries};