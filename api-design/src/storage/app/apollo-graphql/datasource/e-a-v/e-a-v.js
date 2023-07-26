const {RESTDataSource} = require('apollo-datasource-rest');

class EAV extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async getEAVObjectFields(uuid) {
        let uri = `api/v1/eav/object/${uuid}/fields`;

        let params = {};

        return this.get(uri, params);
    }

    async getEAVObjectDefinition(uuid) {
        let uri = `api/v1/eav/object/${uuid}/definition`;

        let params = {};

        return this.get(uri, params);
    }
}

module.exports = {EAV};