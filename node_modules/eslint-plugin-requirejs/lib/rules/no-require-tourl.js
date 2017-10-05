/**
 * @file    Rule to disallow use of `require.toUrl` and `require.nameToUrl`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");
const ast = require("../utils/ast");

const isMemberExpr = ast.isMemberExpr;
const isIdentifier = ast.isIdentifier;
const isRequireIdentifier = rjs.isRequireIdentifier;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of `require.toUrl` and `require.nameToUrl`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const isRequireMemberCall = (node, method) =>
    isMemberExpr(node) &&
    isIdentifier(node.object) &&
    isRequireIdentifier(node.object) &&
    isIdentifier(node.property) &&
    node.property.name === method;

const message = (prop) => `Use of \`require.${prop}\` is not allowed.`;

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    function check(node, method) {
        if (isRequireMemberCall(node.callee, method)) {
            context.report(node, message(method));
        }
    }

    return {
        CallExpression(node) {
            check(node, "toUrl");
            check(node, "nameToUrl");
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
