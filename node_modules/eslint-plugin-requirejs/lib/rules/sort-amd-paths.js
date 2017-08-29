/**
 * @file    Rule to ensure that required paths are ordered alphabetically
 * @author  Ondřej Brejla <ondrej@brejla.cz>
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const rjs = require("../utils/rjs");

const isAmdDefine = rjs.isAmdDefine;
const isAmdRequire = rjs.isAmdRequire;
const getModuleFunction = rjs.getModuleFunction;
const getDependencyStringNodes = rjs.getDependencyStringNodes;

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

const docs = {
    description: "Ensure that required paths are ordered alphabetically",
    category: "Stylistic Choices",
    recommended: false
};

const schema = [
    {
        type: "object",
        properties: {
            compare: {
                enum: ["dirname-basename", "fullpath", "basename"]
            },
            sortPlugins: {
                enum: ["preserve", "first", "last", "ignore"]
            },
            ignoreCase: {
                type: "boolean"
            }
        },
        additionalProperties: false
    }
];

const defaults = {
    "compare": "dirname-basename",
    "sortPlugins": "preserve",
    "ignoreCase": true
};

// -----------------------------------------------------------------------------
// Helpers
// -----------------------------------------------------------------------------

const PLUGIN_REGEX = /^\w+\!/;
const PATH_SEPARATOR = "/";

/**
 * Create a function that returns the additive inverse of the provided function.
 * @param   {Function} fn - function to invert
 * @returns {Function} inverted function
 */
const inverse = (fn) => function () {
    return fn.apply(null, arguments) * -1;
};

/**
 * Create a comparator that iteratively applies each provided function. Each
 * function should itself be a valid comparator (returning a negative number,
 * positive number or zero). This allows for sorting based on multiple criteria.
 * @param   {Function[]} fns - array of comparator functions to apply
 * @returns {Function} multi-criteria comparator
 */
const comparator = (fns) => (a, b) => fns.reduce((n, f) => n ? n : f(a, b), 0);

/**
 * Compare two string values. Comparison is done based on character value, so
 * uppercase letters are placed before lowercase ones.
 * @param   {String} a - first value to compare
 * @param   {String} b - second value to compare
 * @returns {Number} negative if `a` occurs before `b`; positive if `a` occurs
 *                   after `b`; 0 if they are equivalent in sort order
 */
const stringCompare = (a, b) => {
    if (a < b) return -1;
    if (a > b) return 1;
    return 0;
};

/**
 * Compare two values based on existence, with values that exist sorted
 * before those that don't.
 * @param   {*} a - first value to compare
 * @param   {*} b - second value to compare
 * @returns {Number} negative if `a` occurs before `b`; positive if `a` occurs
 *                   after `b`; 0 if they are equivalent in sort order
 */
const existentialCompare = (a, b) => {
    if (a && !b) return -1;
    if (!a && b) return 1;
    return 0;
};

/**
 * Compare two array values.
 * @param   {Array} a - first array to compare
 * @param   {Array} b - second array to compare
 * @returns {Number} negative if `a` occurs before `b`; positive if `a` occurs
 *                   after `b`; 0 if they are equivalent in sort order
 */
const arrayCompare = (a, b) => {
    const length = Math.max(a.length, b.length);
    for (let i = 0; i < length; i += 1) {
        if (!(i in a)) return -1;
        if (!(i in b)) return 1;
        if (a[i] < b[i]) return -1;
        if (a[i] > b[i]) return 1;
    }
    return 0;
};

const toPathDescriptor = (opts) => (node) => {
    let value = opts.ignoreCase ? node.value.toLowerCase() : node.value;

    if (opts.sortPlugins === "ignore") {
        value = value.replace(PLUGIN_REGEX, "");
    }

    const plugin = PLUGIN_REGEX.test(value);
    const path = value.split(PATH_SEPARATOR);
    const basename = path.slice(-1)[0];
    const dirnames = path.slice(0, -1);

    return { node, value, plugin, basename, dirnames };
};

// Specific Comparators
const comparePlugins   = (a, b) => existentialCompare(a.plugin, b.plugin);
const compareDirnames  = (a, b) => arrayCompare(a.dirnames, b.dirnames);
const compareBasenames = (a, b) => stringCompare(a.basename, b.basename);
const compareFullPath  = (a, b) => stringCompare(a.value, b.value);

const message = (expected) =>
    `Required paths are not in alphabetical order (expected '${expected}').`;

// -----------------------------------------------------------------------------
// Rule Definition
// -----------------------------------------------------------------------------

const comparators = {
    plugin: {
        "first":    [comparePlugins],
        "last":     [inverse(comparePlugins)],
        "ignore":   [],
        "preserve": []
    },
    path: {
        "dirname-basename": [compareDirnames, compareBasenames],
        "basename":         [compareBasenames],
        "fullpath":         [compareFullPath]
    }
};

function create(context) {
    const opts = Object.assign({}, defaults, context.options[0]);

    return {
        CallExpression(node) {
            if (!isAmdDefine(node) && !isAmdRequire(node)) return;

            const arity = getModuleFunction(node).params.length;
            const paths = getDependencyStringNodes(node).slice(0, arity);

            const criteria = []
                .concat(comparators.plugin[opts.sortPlugins])
                .concat(comparators.path[opts.compare]);

            const sorted = paths.slice()
                .map(toPathDescriptor(opts))
                .sort(comparator(criteria));

            for (let i = 0; i < paths.length; i++) {
                if (paths[i] !== sorted[i].node) {
                    context.report(paths[i], message(sorted[i].node.value));
                    break;
                }
            }
        }
    };
}

module.exports = {
    meta: { docs, schema },
    create
};
