const {GraphQLScalarType} = require('graphql')
const {Kind} = require('graphql/language')

function parseLiteral(ast) {
    switch (ast.kind) {
        case Kind.STRING:
        case Kind.BOOLEAN:
            return ast.value;
        case Kind.INT:
        case Kind.FLOAT:
            return parseFloat(ast.value);
        case Kind.OBJECT: {
            const value = {
                toString: function () {
                    return JSON.stringify(this);
                }
            };

            ast.fields.forEach((field) => {
                value[field.name.value] = parseLiteral(field.value);
            });

            return value;
        }
        case Kind.LIST:
            return {
                data: ast.values.map(parseLiteral),

                toString: function () {
                    return JSON.stringify(this.data);
                }
            };
        default:
            return null;
    }
}

const anyType = new GraphQLScalarType({
    name: "Any",
    description: "An object, list or value.",
    serialize(value) {
        return value;
    },
    parseValue(value) {
        return value;
    },
    parseLiteral(ast) {
        return parseLiteral(ast);
    }
});

module.exports = {anyType};