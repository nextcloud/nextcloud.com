/**
 * @file    Rule to disallow use of named module form of `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isNamedDefine = rjs.isNamedDefine;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of named module form of `define`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Named module form of `define` is not allowed";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isNamedDefine(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
