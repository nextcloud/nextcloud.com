/**
 * @file    Rule to disallow use of `module.exports` in a module definition when
 *          using Simplified CommonJS Wrapper
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const ast = require("../utils/ast");
const rjs = require("../utils/rjs");

const ancestor = ast.ancestor;
const isMemberExpr = ast.isMemberExpr;
const isCommonJsWrapper = rjs.isCommonJsWrapper;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of `module.exports` in a module definition when using Simplified CommonJS Wrapper",
    category: "Stylistic Choices",
    recommended: true
};

const schema = [];

const message = "Unexpected use of `module.exports` in module definition.";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const assignsToModuleExports = (node) =>
    isMemberExpr(node.left) &&
    node.left.object.name === "module" &&
    node.left.property.name === "exports";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        AssignmentExpression(node) {
            if (assignsToModuleExports(node) && ancestor(isCommonJsWrapper, node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
