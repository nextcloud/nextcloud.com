/**
 * @file    Rule to disallow `.js` extension in dependency paths
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isAmdCall = rjs.isAmdCall;
const getDependencyStringNodes = rjs.getDependencyStringNodes;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Disallow `.js` extension in dependency paths",
    category: "Possible Errors",
    recommended: true
};

const schema = [
    {
        type: "array",
        uniqueItems: true,
        items: {
            type: "string"
        }
    }
];

const message = "Don't use .js extension in dependency path.";

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const append = (str) => (val) => val + str;
const report = (context) => (node) => context.report(node, message);

const hasJsExtension  = (node) => node.value.trim().endsWith(".js");
const startsWithOneOf = (list, str) => list.some((val) => str.startsWith(val));
const hasNoPlugin     = (str) => !str.includes("!");

const shouldBeChecked = (plugins) => (node) =>
    startsWithOneOf(plugins, node.value) ||
    hasNoPlugin(node.value);

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

function create(context) {
    const plugins = (context.options[0] || []).map(append("!"));

    return {
        CallExpression(node) {
            if (!isAmdCall(node)) return;

            getDependencyStringNodes(node)
                .filter(shouldBeChecked(plugins))
                .filter(hasJsExtension)
                .forEach(report(context));
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
