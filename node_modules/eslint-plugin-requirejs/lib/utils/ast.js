/**
 * @file    Helper functions for working with AST Nodes
 * @author  Casey Visco <cvisco@gmail.com>
 */

"use strict";

const isArray = Array.isArray;

/**
 * Test if supplied `value` is an object.
 * @private
 * @param   {*} value - value to test
 * @returns {Boolean} true if value is an object
 */
function isObject(value) {
    const type = typeof value;
    return type === "object" || type === "function";
}

/**
 * Test if supplied `node` represents an identifier.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents an identifier
 */
function isIdentifier(node) {
    return isObject(node) && node.type === "Identifier";
}

/**
 * Test if supplied `node` represents a literal of any kind.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents a literal
 */
function isLiteral(node) {
    return isObject(node) && node.type === "Literal";
}

/**
 * Test if supplied `node` represents a string literal.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents a string literal
 */
function isStringLiteral(node) {
    return isLiteral(node) && typeof node.value === "string";
}

/**
 * Test if supplied `node` represents an array expression.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents an array expression
 */
function isArrayExpr(node) {
    return isObject(node) && node.type === "ArrayExpression";
}

/**
 * Test if supplied `node` represents an object expression.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents an object expression
 */
function isObjectExpr(node) {
    return isObject(node) && node.type === "ObjectExpression";
}

/**
 * Test if supplied `node` represents a function expression.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents a function expression
 */
function isFunctionExpr(node) {
    return isObject(node) &&
           (node.type === "FunctionExpression" ||
            node.type === "ArrowFunctionExpression");
}

/**
 * Test if supplied `node` represents a member expression.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents a member expression
 */
function isMemberExpr(node) {
    return isObject(node) && node.type === "MemberExpression";
}

/**
 * Test if supplied `node` represents an expression of any kind.
 * @param   {ASTNode} node - node to test
 * @returns {Boolean} true if node represents an expression statement
 */
function isExprStatement(node) {
    return isObject(node) && node.type === "ExpressionStatement";
}

/**
 * Test if supplied `node` represents an array of string literals. Empty
 * arrays are also valid here.
 * @param   {ASTNode} node - ArrayExpression node to test
 * @returns {Boolean} true if node represents an array of string literals
 */
function isStringLiteralArray(node) {
    return isArrayExpr(node) &&
           isArray(node.elements) &&
           node.elements.every(isStringLiteral);
}

/**
 * Test if supplied `node` has parameters.
 * @param   {ASTNode} node - FunctionExpression node to test
 * @returns {Boolean} true if node has at least one parameter
 */
function hasParams(node) {
    return isObject(node) &&
           isArray(node.params) &&
           node.params.length > 0;
}

/**
 * Test if supplied `node` has at least one callback argument
 * @param   {ASTNode} node - CallExpression node to test
 * @returns {Boolean} true if node has at least one callback
 */
function hasCallback(node) {
    return isObject(node) &&
           isArray(node.arguments) &&
           node.arguments.some(isFunctionExpr);
}

/**
 * Determine if `node` has an ancestor satisfying `predicate`.
 * @param   {Function} predicate - predicate to test each ancestor against
 * @param   {ASTNode} node - child node to begin search at
 * @returns {Boolean} true if an ancestor satisfies `predicate`
 */
function ancestor(predicate, node) {
    while ((node = node.parent)) {
        if (predicate(node)) return true;
    }

    return false;
}

/**
 * Find the nearest ancestor satisfying `predicate`.
 * @param   {Function} predicate - predicate to test each ancestor against
 * @param   {ASTNode} node - child node to begin search at
 * @returns {ASTNode|undefined} nearest ancestor satisfying `predicate`, if any
 */
function nearest(predicate, node) {
    while ((node = node.parent)) {
        if (predicate(node)) return node;
    }

    return undefined;
}

module.exports = {
    isIdentifier,
    isLiteral,
    isStringLiteral,
    isArrayExpr,
    isObjectExpr,
    isMemberExpr,
    isFunctionExpr,
    isExprStatement,
    isStringLiteralArray,
    hasParams,
    hasCallback,
    ancestor,
    nearest
};
