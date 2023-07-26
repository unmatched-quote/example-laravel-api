const {RESTDataSource} = require('apollo-datasource-rest');

class InfoApiV1 extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async getDatabasesConnected() {
        let uri = `api/v1/info/database`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {InfoApiV1};