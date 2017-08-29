[![npm][version-image]][version-url]
[![Maintenance Status][status-image]][status-url]
[![Build Status][travis-image]][travis-url]
[![Coverage Status][coveralls-image]][coveralls-url]
[![Package Quality][packagequality-image]][packagequality-url]

# eslint-plugin-requirejs

Enforce code conventions for [RequireJS](http://requirejs.org) modules with [ESLint](http://eslint.org/).

This plugin is under active development, and is updated frequently. Take a look at the [CHANGELOG](https://github.com/cvisco/eslint-plugin-requirejs/blob/master/CHANGELOG.md) to see what's recently been added or fixed.

## Installation

Install [ESLint](https://www.github.com/eslint/eslint) either locally or globally, and then install the plugin (see below). It is important to note that a global instance of ESLint can only use plugins that are also installed globally. A local instance of ESLint, however, can make use of both local and global ESLint plugins.

### Global Installation

    $ npm install -g eslint
    $ npm install -g eslint-plugin-requirejs

### Local Installation

    $ npm install --save-dev eslint
    $ npm install --save-dev eslint-plugin-requirejs

### Installing Older Versions

Please note: this plugin requires **Node 4.x or greater** and ESLint **version 3.x or greater**. If you need to use it with an older version of Node or ESLint, you may install a specific, previous version of the plugin:

    $ npm install --save-dev eslint-plugin-requirejs@0.10.0

## Configuration

Add the `plugins` section to your [config](http://eslint.org/docs/user-guide/configuring) file if not already present and specify `eslint-plugin-requirejs` as a plugin. The `eslint-plugin-` prefix may be omitted:

```json
{
  "plugins": [
    "requirejs"
  ]
}
```

Enable the rules that you would like to use, for example:

```json
{
  "rules": {
    "requirejs/no-invalid-define": 2,
    "requirejs/no-multiple-define": 2,
    "requirejs/no-named-define": 2,
    "requirejs/no-commonjs-wrapper": 2,
    "requirejs/no-object-define": 1
  }
}
```

## Bundled Config

This plugin provides the `plugin:requirejs/recommended` preset config. Which does the following:

* Enables the `amd` environment
* Enables all recommended rules, indicated with a :star: icon in the table below

## List of supported rules

No rules are enabled by default. The `"extends": "plugin:requirejs/recommended"` property in a configuration file enables the marked with a :star:.

The `--fix` option on the command line automatically fixes problems reported by rules marked by a :wrench:.



### Possible Errors

These rules relate to possible syntax or logic errors in your module definition:

|        |          | Rule | Description |
| :----: | :------: | :--- | :---------- |
| :star: |          | [no-invalid-define](docs/rules/no-invalid-define.md) | Disallow invalid module definitions |
| :star: |          | [no-invalid-require](docs/rules/no-invalid-require.md) | Disallow invalid `require` or `requirejs` calls |
| :star: |          | [no-multiple-define](docs/rules/no-multiple-define.md) | Disallow multiple module definitions in one file |
| :star: |          | [no-assign-exports](docs/rules/no-assign-exports.md) | Disallow assignment to `exports` when using Simplified CommonJS Wrapper |
| :star: |          | [no-js-extension](docs/rules/no-js-extension.md) | Disallow `.js` extension in dependency paths |

### Stylistic Choices

These rules relate to style guidelines, and are therefore quite subjective:

|        |          | Rule | Description |
| :----: | :------: | :--- | :---------- |
|        |          | [no-object-define](docs/rules/no-object-define.md) | Disallow Simple Name/Value Pairs form of `define` |
|        |          | [no-function-define](docs/rules/no-function-define.md) | Disallow Simple Function form of `define` |
|        |          | [no-amd-define](docs/rules/no-amd-define.md) | Disallow AMD (dependency array) form of `define` |
|        |          | [no-named-define](docs/rules/no-named-define.md) | Disallow named module form of `define` |
|        |          | [no-commonjs-wrapper](docs/rules/no-commonjs-wrapper.md) | Disallow use of Simplified CommonJS Wrapper |
|        |          | [no-commonjs-return](docs/rules/no-commonjs-return.md) | Disallow use of `return` statement in a module definition when using Simplified CommonJS Wrapper |
|        |          | [no-commonjs-exports](docs/rules/no-commonjs-exports.md) | Disallow use of `exports` in a module definition when using Simplified CommonJS Wrapper |
|        |          | [no-commonjs-module-exports](docs/rules/no-commonjs-module-exports.md) | Disallow use of `module.exports` in a module definition when using Simplified CommonJS Wrapper |
|        |          | [no-dynamic-require](docs/rules/no-dynamic-require.md) | Disallow use of dynamically generated paths in a `require` call |
|        |          | [no-conditional-require](docs/rules/no-conditional-require.md) | Disallow use of conditional `require` calls |
|        |          | [no-assign-require](docs/rules/no-assign-require.md) | Disallow assignment to `require` or `window.require` |
|        |          | [no-require-tourl](docs/rules/no-require-tourl.md) | Disallow use of `require.toUrl` and `require.nameToUrl` |
|        |          | [enforce-define](docs/rules/enforce-define.md) | Require that all files be wrapped in a `define` call |
|        | :wrench: | [one-dependency-per-line](docs/rules/one-dependency-per-line.md) | Enforce line-break rules for AMD dependencies |
|        |          | [amd-function-arity](docs/rules/amd-function-arity.md) | Ensure AMD callbacks have correct number of parameters |
|        |          | [sort-amd-paths](docs/rules/sort-amd-paths.md) | Ensure that required paths are in alphabetical order |

### Don't see the rule you're looking for?

Take a look at what's in progress for the next [milestone](https://github.com/cvisco/eslint-plugin-requirejs/milestones), or suggest a new rule by filing an [issue](https://github.com/cvisco/eslint-plugin-requirejs/issues).

## Contributing

Contributions are encouraged. There are a few ways you can help:

* **Filing issues** - if you find a bug or would like to request a new rule or enhancement, [file an issue](docs/contributing/issues.md)
* **Submitting pull requests** - pick one of the open [issues](https://github.com/cvisco/eslint-plugin-requirejs/issues) to work on and submit a [pull request](docs/contributing/pull-requests.md)

## License

eslint-plugin-requirejs is licensed under the [MIT License](http://www.opensource.org/licenses/mit-license.php).

[version-url]: https://www.npmjs.com/package/eslint-plugin-requirejs
[version-image]: https://img.shields.io/npm/v/eslint-plugin-requirejs.svg?style=flat-square

[status-url]: https://github.com/cvisco/eslint-plugin-requirejs/pulse
[status-image]: http://img.shields.io/badge/status-maintained-brightgreen.svg?style=flat-square

[travis-url]: https://travis-ci.org/cvisco/eslint-plugin-requirejs
[travis-image]: http://img.shields.io/travis/cvisco/eslint-plugin-requirejs/master.svg?style=flat-square

[coveralls-url]: https://coveralls.io/r/cvisco/eslint-plugin-requirejs?branch=master
[coveralls-image]: https://img.shields.io/coveralls/cvisco/eslint-plugin-requirejs/master.svg?style=flat-square

[packagequality-url]: http://packagequality.com/#?package=eslint-plugin-requirejs
[packagequality-image]: http://npm.packagequality.com/shield/eslint-plugin-requirejs.svg?style=flat-square
