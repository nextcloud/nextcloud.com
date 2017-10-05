/**
 * @file    Rule to disallow assignment to `require` or `window.require`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const ast = require("../utils/ast");

const isIdentifier = ast.isIdentifier;
const isMemberExpr = ast.isMemberExpr;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow assignment to `require` or `window.require`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Invalid assignment to `require`.";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const isWindow = (node) =>
    isIdentifier(node) && node.name === "window";

const isRequire = (node) =>
    isIdentifier(node) && node.name === "require";

const isWindowRequire = (node) =>
    isMemberExpr(node) &&
    isWindow(node.object) &&
    isRequire(node.property);

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        AssignmentExpression(node) {
            if (isRequire(node.left) || isWindowRequire(node.left)) {
                context.report(node, message);
            }
        },

        VariableDeclarator(node) {
            if (isRequire(node.id)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
