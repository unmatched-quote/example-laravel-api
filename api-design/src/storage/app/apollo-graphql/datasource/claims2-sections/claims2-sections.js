const {RESTDataSource} = require('apollo-datasource-rest');

class Claims2Sections extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claim2SectionListing(page, limit, sortBy, desc) {
        let uri = `api/v1/claims-2-sections`;

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

    async claim2SectionCreate(section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid) {
        let uri = `api/v1/claim-2-section/create`;

        let params = {section_type_id: section_type_id, claim_id: claim_id, revision_id: revision_id, eoc_id: eoc_id, payee_id: payee_id, apply_surplus_percentage: apply_surplus_percentage, amount_reserved: amount_reserved};

        if (amount_deductible !== undefined) {
            params['amount_deductible'] = amount_deductible;
        }

        if (amount_loss_adjusters_fee !== undefined) {
            params['amount_loss_adjusters_fee'] = amount_loss_adjusters_fee;
        }

        if (amount_settlement_paid !== undefined) {
            params['amount_settlement_paid'] = amount_settlement_paid;
        }

        return this.post(uri, params);
    }

    async claim2SectionReadById(id) {
        let uri = `api/v1/claim-2-section/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claim2SectionUpdateById(id, section_type_id, claim_id, revision_id, eoc_id, payee_id, apply_surplus_percentage, amount_reserved, amount_deductible, amount_loss_adjusters_fee, amount_settlement_paid) {
        let uri = `api/v1/claim-2-section/${id}`;

        let params = {section_type_id: section_type_id, claim_id: claim_id, revision_id: revision_id, eoc_id: eoc_id, payee_id: payee_id, apply_surplus_percentage: apply_surplus_percentage, amount_reserved: amount_reserved};

        if (amount_deductible !== undefined) {
            params['amount_deductible'] = amount_deductible;
        }

        if (amount_loss_adjusters_fee !== undefined) {
            params['amount_loss_adjusters_fee'] = amount_loss_adjusters_fee;
        }

        if (amount_settlement_paid !== undefined) {
            params['amount_settlement_paid'] = amount_settlement_paid;
        }

        return this.put(uri, params);
    }

    async claim2SectionDeleteById(id) {
        let uri = `api/v1/claim-2-section/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {Claims2Sections};