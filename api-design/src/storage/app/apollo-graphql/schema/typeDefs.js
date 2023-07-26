const {gql} = require('apollo-server');
const {schema} = require('./schema');
const {queries} = require('./queries');
const {mutations} = require('./mutations');

const typeDefs = gql`
${schema}
${queries}
${mutations}
`

module.exports = {typeDefs};