/**
 * @file    Rule to disallow use of simple function form of `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isFunctionDefine = rjs.isFunctionDefine;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of simple function form of `define`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "Simple function form of `define` is not allowed";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isFunctionDefine(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
