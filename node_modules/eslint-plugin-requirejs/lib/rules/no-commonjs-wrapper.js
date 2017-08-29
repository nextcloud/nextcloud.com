/**
 * @file    Rule to disallow use of Simplified CommonJS Wrapper form of `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isCommonJsWrapper = rjs.isCommonJsWrapper;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of Simplified CommonJS Wrapper form of `define`",
    category: "Stylistic Choices",
    recommended: true
};

const schema = [];

const message = "Simplified CommonJS Wrapper form of `define` is not allowed";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isCommonJsWrapper(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
