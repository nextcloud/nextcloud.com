/**
 * @file    Rule to disallow use of Simple Name/Value Pairs form of `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isObjectDefine = rjs.isObjectDefine;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of Simple Name/Value Pairs form of `define`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Simple Name/Value Pairs form of `define` is not allowed";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isObjectDefine(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
