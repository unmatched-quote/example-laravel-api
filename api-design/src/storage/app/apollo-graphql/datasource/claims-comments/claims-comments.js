const {RESTDataSource} = require('apollo-datasource-rest');

class ClaimsComments extends RESTDataSource {
    constructor(baseURL) {
        super();

        this.baseURL = baseURL;
    }

    willSendRequest(request) {
        let token = this.context.auth.token;

        request.headers.set('Authorization', `Bearer ${token}`);
    }

    async claimCommentCreate(uuid, comment, revision) {
        let uri = `api/v1/claim/uuid/${uuid}/claim-comment/create`;

        let params = {comment: comment};

        if (revision !== undefined) {
            params['revision'] = revision;
        }

        return this.post(uri, params);
    }

    async claimCommentReadById(id) {
        let uri = `api/v1/claim-comment/${id}`;

        let params = {};

        return this.get(uri, params);
    }

    async claimCommentUpdateById(id, comment) {
        let uri = `api/v1/claim-comment/${id}`;

        let params = {comment: comment};

        return this.put(uri, params);
    }

    async claimCommentReadDeleteById(id) {
        let uri = `api/v1/claim-comment/${id}`;

        let params = {};

        return this.delete(uri, params);
    }
}

module.exports = {ClaimsComments};