/**
 * @file    Rule to disallow use of conditional `require` calls
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const ast = require("../utils/ast");
const rjs = require("../utils/rjs");

const ancestor = ast.ancestor;
const isRequireCall = rjs.isRequireCall;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of conditional `require` calls",
    category: "Stylistic Choices",
    recommended: true
};

const schema = [];

const message = "Conditional `require` calls are not allowed.";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const isConditional = (node) =>
    node.type === "IfStatement" ||
    node.type === "ConditionalExpression";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isRequireCall(node) && ancestor(isConditional, node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
