/**
 * @file    Rule to disallow files that are not wrapped in a call to `define`
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const path = require("path");
const rjs = require("../utils/rjs");
const ast = require("../utils/ast");

const isDefineCall = rjs.isDefineCall;
const isExprStatement = ast.isExprStatement;
const basename = path.basename;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow files that are not wrapped in a call to `define`",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [
    {
        anyOf: [
            {
                type: "string"
            },
            {
                type: "array",
                uniqueItems: true,
                items: {
                    type: "string"
                }
            }
        ]
    }
];

const message = "File must be wrapped in a `define` call";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const includes = (list, item) => list.indexOf(item) !== -1;

const isDefineExpr = (child) =>
    isExprStatement(child) && isDefineCall(child.expression);

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    const ignoredFiles = context.options[0] || [];

    return {
        Program(node) {
            const filename = basename(context.getFilename());

            if (includes(ignoredFiles, filename)) return;

            if (!node.body.every(isDefineExpr)) {
                context.report(node, message);
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
