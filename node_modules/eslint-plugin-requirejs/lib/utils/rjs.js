/**
 * @file    Helper functions for working with RequireJS-related nodes
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const ast = require("./ast");

const hasParams = ast.hasParams;
const isLiteral = ast.isLiteral;
const isStringLiteral = ast.isStringLiteral;
const isArrayExpr = ast.isArrayExpr;
const isObjectExpr = ast.isObjectExpr;
const isFunctionExpr = ast.isFunctionExpr;

const CJS_PARAMS = ["require", "exports", "module"];

/**
 * Determine if supplied `node` has a parameter list that satisfies the
 * requirements for a Simplified CommonJS Wrapper.
 * @private
 * @param   {Array} params list of function parameters to test
 * @returns {Boolean} true if `params` satisfies a CommonJS Wrapper format
 */
const hasCommonJsParams = (params) =>
    params.length && params.every((param, i) => param.name === CJS_PARAMS[i]);

/**
 * Determine if supplied `node` represents a function expression compatible with
 * the Simplfied CommonJS Wrapper.
 * @private
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if represents a CommonJS function expression
 */
const isCommonJsFuncExpr = (node) =>
    isFunctionExpr(node) && hasCommonJsParams(node.params);

/**
 * Determine if supplied `node` represents a "simple" function expression. That
 * is, one without any parameter list.
 * @private
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if represents a simple function expression
 */
const isSimpleFuncExpr = (node) =>
    isFunctionExpr(node) && !hasParams(node);

/**
 * Determine if supplied `node` represents a call to `define`.
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a call to `define`
 */
const isDefineCall = (node) =>
    node &&
    node.type === "CallExpression" &&
    node.callee.type === "Identifier" &&
    node.callee.name === "define";

/**
 * Determine if supplied `node` represents a module definition function with
 * a dependency array. This is the classic AMD style module definition.
 * @see     http://requirejs.org/docs/api.html#defdep
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if represents an AMD style module definition
 */
const isAmdDefine = (node) =>
    isDefineCall(node) && isAmdArgs(withoutModuleId(node.arguments));

/**
 * Determine if supplied `node` represents a require function with
 * a dependency array.
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents an AMD style require function
 */
const isAmdRequire = (node) =>
    isRequireCall(node) && isAmdArgs(node.arguments);

const isAmdArgs = (args) =>
    args.length === 2 && isArrayExpr(args[0]) && isFunctionExpr(args[1]);

const withoutModuleId = (args) =>
    isStringLiteral(args[0]) ? args.slice(1) : args;

/**
 * Determine if supplied `node` represents a plain object module. This is
 * referred to as the "Simple Name/Value Pairs" form of module in the
 * RequireJS documentation.
 * @see     http://requirejs.org/docs/api.html#defsimple
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents an Object Module Definition
 */
const isObjectDefine = (node) =>
    isDefineCall(node) && isObjectArgs(withoutModuleId(node.arguments));

const isObjectArgs = (args) =>
    args.length === 1 && isObjectExpr(args[0]);

/**
 * Determine if supplied `node` represents a module definition function with
 * no dependency array.
 * @see     http://requirejs.org/docs/api.html#deffunc
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a Simple Function Definition
 */
const isFunctionDefine = (node) =>
    isDefineCall(node) && isFunctionArgs(withoutModuleId(node.arguments));

const isFunctionArgs = (args) =>
    args.length === 1 && isSimpleFuncExpr(args[0]);

/**
 * Determine if supplied `node` represents a module definition using the
 * "Simplified CommonJS Wrapper" form.
 * @see     http://requirejs.org/docs/api.html#cjsmodule
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a Simplified CommonJS Wrapper
 */
const isCommonJsWrapper = (node) =>
    isDefineCall(node) && isCommonJsArgs(withoutModuleId(node.arguments));

const isCommonJsArgs = (args) =>
    args.length === 1 && isCommonJsFuncExpr(args[0]);

/**
 * Determine if supplied `node` represents a named (or aliased) module
 * definition function.
 * @see     http://requirejs.org/docs/api.html#modulename
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a named module definition function
 */
const isNamedDefine = (node) =>
    isDefineCall(node) && isNamedArgs(node.arguments);

const isNamedArgs = (args) =>
    (args.length === 2 || args.length === 3) && isStringLiteral(args[0]);

/**
 * Determine if supplied `node` represents a valid `define` format.
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a valid module definition function
 */
const isValidDefine = (node) => {
    const args = withoutModuleId(node.arguments);
    if (args.length === 1) return isObjectExpr(args[0]) || isFunctionExpr(args[0]);
    if (args.length === 2) return isArrayExpr(args[0]) && isFunctionExpr(args[1]);
    return false;
};

/**
 * Determine if supplied `node` represents a `require` or `requirejs`
 * identifier. Both are synonymous commands.
 * @param   {ASTNode} node - Identifier node to test
 * @returns {Boolean} true if represents a require identifier.
 */
const isRequireIdentifier = (node) =>
    node.name === "require" || node.name === "requirejs";

/**
 * Determine if supplied `node` represents a call to `require`.
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a call to `require`
 */
const isRequireCall = (node) =>
    node.type === "CallExpression" &&
    node.callee.type === "Identifier" &&
    isRequireIdentifier(node.callee);


/**
 * Determine if supplied `node` represents a valid `require` format.
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if represents a valid `require` call
 */
const isValidRequire = (node) => {
    const args = node.arguments;

    // If the wrong number of arguments is present, we know it's invalid,
    // so just return immediately
    if (args.length < 1 || args.length > 3) return false;

    // Single argument form should be a string literal, an array expression,
    // or something that evalutes to one of those. Realistically, we can only
    // test for a few obviously incorrect cases
    if (args.length === 1) {
        return !isObjectExpr(args[0]) &&
               !isFunctionExpr(args[0]);
    }

    // For 2 or 3-argument forms, the tail arguments should be function
    // expressions, or something that could evaluate to a function expression.
    // Realistically, we can only test for a few obviously incorrect cases.
    if (args.length > 1 && isInvalidRequireArg(args[1])) return false;
    if (args.length > 2 && isInvalidRequireArg(args[2])) return false;

    // For 2 or 3-argument forms, the first argument should be an array
    // expression or something that evaluates to one. Again, realistically, we
    // can only test for a few obviously incorrect cases
    return !isLiteral(args[0]) &&
           !isObjectExpr(args[0]) &&
           !isFunctionExpr(args[0]);
};

const isInvalidRequireArg = (arg) =>
    isObjectExpr(arg) || isArrayExpr(arg) || isLiteral(arg);

/**
 * Retrieve the dependency list from the provided `node`, without any filtering
 * by dependency node type.
 * @param   {ASTNode} node - CallExpression to inspect
 * @returns {Array} list of dependency path nodes
 */
const getDependencyNodes = (node) => {
    const args = node.arguments;

    if (isDefineCall(node) && args.length > 1) {
        if (isArrayExpr(args[0])) return args[0].elements;
        if (isArrayExpr(args[1])) return args[1].elements;
    } else if (isRequireCall(node)) {
        if (isArrayExpr(args[0])) return args[0].elements;
        if (isStringLiteral(args[0])) return [ args[0] ];
    }

    return [];
};

/**
 * Retrieve the dependency list from the provided `node`, filtering by node
 * type to return only string literal dependencies.
 * @param   {ASTNode} node - CallExpression to inspect
 * @returns {Array} list of dependency path literals
 */
const getDependencyStringNodes = (node) =>
    getDependencyNodes(node).filter(isStringLiteral);

/**
 * Retrieve the module definition function from the provided `node`. It will
 * always be the first FunctionExpression in the arguments list.
 * @param   {ASTNode} node - node to check
 * @returns {ASTNode} module definition function
 */
const getModuleFunction = (node) => node.arguments.find(isFunctionExpr);

const isAmdCall = (node) => isDefineCall(node) || isRequireCall(node);

module.exports = {
    isRequireCall,
    isDefineCall,
    isAmdDefine,
    isAmdRequire,
    isObjectDefine,
    isFunctionDefine,
    isCommonJsWrapper,
    isNamedDefine,
    isValidDefine,
    isRequireIdentifier,
    isValidRequire,
    getDependencyNodes,
    getDependencyStringNodes,
    getModuleFunction,
    withoutModuleId,
    isAmdCall
};
