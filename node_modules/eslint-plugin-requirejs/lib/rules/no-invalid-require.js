/**
 * @file    Rule to disallow invalid or undesired forms of `require`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isRequireCall = rjs.isRequireCall;
const isValidRequire = rjs.isValidRequire;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow invalid or undesired forms of `require`",
    category: "Possible Errors",
    recommended: true
};

const schema = [];

const message = "Invalid arguments provided to `require` call.";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isRequireCall(node) && !isValidRequire(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
