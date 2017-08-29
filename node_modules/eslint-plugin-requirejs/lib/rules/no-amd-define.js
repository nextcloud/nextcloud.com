/**
 * @file    Rule to disallow use of AMD (dependency array) form of `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isAmdDefine = rjs.isAmdDefine;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow use of AMD (dependency array) form of `define`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [];

const message = "AMD form of `define` is not allowed.";

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    return {
        CallExpression(node) {
            if (isAmdDefine(node)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
