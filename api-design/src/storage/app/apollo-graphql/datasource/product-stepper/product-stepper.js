const {RESTDataSource} = require('apollo-datasource-rest');

class ProductStepper extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async getProductStepperByUUID(uuid) {
        let uri = `api/v1/product/${uuid}/stepper`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {ProductStepper};