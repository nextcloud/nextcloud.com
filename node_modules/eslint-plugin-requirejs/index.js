"use strict";

module.exports = {
    rules: {
        "no-invalid-define": require("./lib/rules/no-invalid-define"),
        "no-invalid-require": require("./lib/rules/no-invalid-require"),
        "no-multiple-define": require("./lib/rules/no-multiple-define"),
        "no-assign-exports": require("./lib/rules/no-assign-exports"),
        "no-js-extension": require("./lib/rules/no-js-extension"),
        "no-object-define": require("./lib/rules/no-object-define"),
        "no-function-define": require("./lib/rules/no-function-define"),
        "no-amd-define": require("./lib/rules/no-amd-define"),
        "no-named-define": require("./lib/rules/no-named-define"),
        "no-commonjs-wrapper": require("./lib/rules/no-commonjs-wrapper"),
        "no-commonjs-return": require("./lib/rules/no-commonjs-return"),
        "no-commonjs-exports": require("./lib/rules/no-commonjs-exports"),
        "no-commonjs-module-exports": require("./lib/rules/no-commonjs-module-exports"),
        "no-dynamic-require": require("./lib/rules/no-dynamic-require"),
        "no-conditional-require": require("./lib/rules/no-conditional-require"),
        "no-assign-require": require("./lib/rules/no-assign-require"),
        "no-require-tourl": require("./lib/rules/no-require-tourl"),
        "enforce-define": require("./lib/rules/enforce-define"),
        "one-dependency-per-line": require("./lib/rules/one-dependency-per-line"),
        "amd-function-arity": require("./lib/rules/amd-function-arity"),
        "sort-amd-paths": require("./lib/rules/sort-amd-paths")
    },
    configs: {
        recommended: {
            env: {
                amd: true
            },
            rules: {
                "requirejs/no-invalid-define": "error",
                "requirejs/no-invalid-require": "error",
                "requirejs/no-multiple-define": "error",
                "requirejs/no-assign-exports": "error",
                "requirejs/no-js-extension": "error"
            }
        }
    }
};
