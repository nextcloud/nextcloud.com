/**
 * @file    Rule to enforce or disallow one dependency per line.
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");
const ast = require("../utils/ast");

const isAmdCall = rjs.isAmdCall;
const withoutModuleId = rjs.withoutModuleId;
const isArrayExpr = ast.isArrayExpr;
const isFunctionExpr = ast.isFunctionExpr;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Require or disallow one dependency per line",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [
    {
        type: "object",
        properties: {
            paths: {
                oneOf: [
                    {
                        enum: ["always", "never"]
                    },
                    {
                        type: "number",
                        minimum: 0
                    }
                ]
            },
            names: {
                oneOf: [
                    {
                        enum: ["always", "never"]
                    },
                    {
                        type: "number",
                        minimum: 0
                    }
                ]
            }
        },
        additionalProperties: false
    }
];

const defaults = {
    paths: "always",
    names: "always"
};

const messages = {
    always: {
        paths: "Only one dependency path is permitted per line.",
        names: "Only one dependency name is permitted per line."
    },
    never: {
        paths: "Dependency paths must appear on one line.",
        names: "Dependency names must appear on one line."
    }
};

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const pad    = (amount) => (val) => " ".repeat(amount) + val;
const line   = (node) => node.loc.start.line;
const column = (node) => node.loc.start.column;
const unique = (list) => Array.from(new Set(list));

const hasDuplicates = (list) => unique(list).length < list.length;
const hasMultiple   = (list) => unique(list).length > 1;
const isLongerThan  = (val, list) => Number.isInteger(val) && list.length > val;
const isAlways      = (val) => val === "always";
const isNever       = (val) => val === "never";

const indentation = (node) => {
    const statement = node.body.body[0];
    return statement && line(node) !== line(statement) ? column(statement) : 0;
};

const formatPaths = (indent) => (node) => {
    const paths = node.elements.map(v => v.raw).map(pad(indent)).join(",\n");
    return `[\n${paths}\n]`;
};

const formatNames = (indent, context) => (node) => {
    const names = node.params.map(v => v.name).map(pad(indent)).join(",\n");
    const body = context.getSourceCode().getText(node.body);
    return `function (\n${names}\n) ${body}`;
};

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    const settings = Object.assign({}, defaults, context.options[0]);

    function check(setting, node, list, format) {
        const val = settings[setting];
        const lines = list.map(line);

        if ((isLongerThan(val, lines) || isAlways(val)) && hasDuplicates(lines)) {
            const message = messages.always[setting];
            const fix = (f) => f.replaceTextRange(node.range, format(node));
            context.report({ node, message, fix });
        }

        if (isNever(val) && hasMultiple(lines)) {
            const message = messages.never[setting];
            context.report({ node, message });
        }
    }

    return {
        CallExpression(node) {
            if (!isAmdCall(node) || node.arguments.length < 2) return;

            const args = withoutModuleId(node.arguments);
            const deps = args[0];
            const func = args[1];

            if (!isArrayExpr(deps) || !isFunctionExpr(func)) return;

            const indent = indentation(func);

            check("paths", deps, deps.elements, formatPaths(indent));
            check("names", func, func.params, formatNames(indent, context));
        }
    };
}

module.exports = {
    meta: { docs, schema, fixable: "code" },
    create
};
