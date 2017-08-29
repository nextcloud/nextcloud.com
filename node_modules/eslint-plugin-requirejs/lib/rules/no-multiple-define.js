/**
 * @file    Rule to disallow multiple `define` calls in a single file
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isDefineCall = rjs.isDefineCall;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow multiple `define` calls in a single file",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Multiple `define` calls in a single file are not permitted";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    let defineCalls = 0;

    return {
        CallExpression: function (node) {
            if (isDefineCall(node) && ++defineCalls > 1) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
