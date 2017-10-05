/**
 * @file    Rule to disallow dynamically generated paths in `require` call
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");
const ast = require("../utils/ast");

const isRequireCall = rjs.isRequireCall;
const isStringLiteral = ast.isStringLiteral;
const isStringLiteralArray = ast.isStringLiteralArray;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of dynamically generated paths in a require call",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Dynamic `require` calls are not allowed.";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const hasStaticDependencies = (node) =>
    isStringLiteral(node.arguments[0]) ||
    isStringLiteralArray(node.arguments[0]);

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isRequireCall(node) && !hasStaticDependencies(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
