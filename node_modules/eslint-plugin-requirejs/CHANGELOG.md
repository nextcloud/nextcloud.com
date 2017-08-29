### v3.1.1 - January 2, 2017

* Added travis ci support for node 7 (Amila Welihinda)

### v3.1.0 - November 29, 2016

* New: Add support for Arrow Functions in `ast.isFunctionExpr` (#98) (Justin Cruz)

### v3.0.0 - September 26, 2016

* Breaking: Convert rules to new format (fixes #81) (Casey Visco)
* New: Export `plugin:requirejs/recommended` config (Casey Visco)
* Update: Refactor codebase to ES6 (Casey Visco)
* Chore: Extract generic AST functions to own file (Casey Visco)
* Chore: Convert all `var` to `const` or `let` (Casey Visco)
* Chore: Update ESLint Dev and Peer versions to 3.x (fixes #95) (Casey Visco)
* Chore: Replace custom `repeat` function with native ES6 (fixes #94) (Casey Visco)
* Chore: Update eslintrc to support Node 4 ES6 features (fixes #92) (Casey Visco)
* Chore: Remove old node versions from Travis CI (fixes #90) (Casey Visco)
* Build: Improve Test Coverage of no-assign-require rule (Casey Visco)
* Build: Refactor error message creators for amd-function-arity (Casey Visco)
* Build: Add wrapper around ESLint RuleTester (Casey Visco)
* Build: Move test fixtures to a single file (fixes #93) (Casey Visco)
* Docs: Format rule list into tables (Casey Visco)
* Docs: Update version note in README (Casey Visco)

### v2.0.1 - July 16, 2016

* Chore: Add .npmignore (fixes #91) (Casey Visco)
* Chore: Implement `unique` util function (fixes #89) (Casey Visco)
* Chore: Implement `repeat` util function (fixes #87) (Casey Visco)

### v2.0.0 - July 16, 2016

* Breaking: Bump ESLint peer version to 2.0.0 (fixes #76) (Casey Visco)
* Breaking: Remove `rulesConfig` (fixes #84) (Casey Visco)
* Fix: no-js-extension rule crashes on empty require (fixes #83) (Casey Visco)
* Docs: Add Contributing Documentation (fixes #61) (Casey Visco)
* Docs: Add Version Compatibility Section (Casey Visco)
* Build: Remove rulesConfig related checks from makefile (Casey Visco)
* Build: Fix RegExp in `changelog` target (Casey Visco)
* Build: Add `unit` makefile target (Casey Visco)
* Build: Add Node v6 to Travis CI Build (fixes #82) (Casey Visco)
* Build: Roll ESLint Back to v2.13.1 (Casey Visco)
* Upgrade: Update DevDependencies (fixes #80) (Casey Visco)
* Upgrade: Update Dependencies (fixes #79) (Casey Visco)
* Chore: Add npmrc file (Casey Visco)
* Chore: Rename .eslintrc (Casey Visco)

### v0.10.0 - July 11, 2016

* Add array of allowed paths to allowExtraDependencies of amd-function-arity (fixes #77) (Sam Bason)

### v0.9.4 - February 1, 2016

* Update: sorting of paths with a plugin prefix (fixes #73) (Ondrej Brejla)

### v0.9.3 - January 28, 2016

* Fix failing tests in sort-amd-paths (Casey Visco)
* Update: sort-amd-paths rule should give a better feedback (fixes #69) (Ondrej Brejla)
* Update: sort-amd-paths should consider "/" before anything else (fixes #70) (Ondřej Brejla)

### v0.9.2 - January 26, 2016

* Update: invalid no-js-extension (fixes #62) (Ondrej Brejla)

### v0.9.1 - January 25, 2016

* API: introduce getAmdCallback() to utils API (fixes #65) (Ondrej Brejla)
* Fix: Sort-amd-path rule should ignore some paths (fixes #63) (Ondrej Brejla)

### v0.9.0 - January 24, 2016

* Build: Update dependency versions (Casey Visco)
* New: sort-amd-paths rule (fixes #59) (Ondrej Brejla)
* Build: Auto-load fixtures (fixes #54) (Casey Visco)

### v0.8.0 - January 16, 2016

* New: Fixer for one-dependency-per-line rule (fixes #51). (Afnan Fahim)
* Build: Add Node v4 and v5 targets to travis.yml (Casey Visco)

### v0.7.2 - January 13, 2016

* Build: Remove duplicate keys in .eslintrc (Casey Visco)

### v0.7.1 - January 13, 2016

* Fix: amd-function-arity no longer reports on dynamic dependencies (fixes #50) (Kevin Partington)

### v0.7.0 - December 19, 2015

* Fix: no-invalid-require tolerates Identifier/CallExpression callbacks (fixes #44) (Kevin Partington)
* Build: Added files array to package.json (fixes #40) (Kevin Partington)
* New: amd-function-arity rule (fixes #38) (Kevin Partington)
* Build: Ensuring build can run on Windows (fixes #41) (Kevin Partington)
* Update: no-multiple-define checks CallExpression only (fixes #42) (Kevin Partington)
* Fix: enforce-define will warn on any non-ExpressionStatement (fixes #37) (Kevin Partington)
* Docs: Use full URL for CHANGELOG in README (Casey Visco)
* Docs: Link to eslint.org in README instead of repo (Casey Visco)
* Docs: Fix typos in one-dependency-per-line docs (Casey Visco)

### v0.6.0 - August 9, 2015

* New: Implement one-dependency-per-line rule (fixes #34) (Casey Visco)
* Add empty schemas for rules that take no options (Casey Visco)
* Build: Add mocha npm script for running individual tests (Casey Visco)
* Build: Improve fixture loading (Casey Visco)

### v0.5.3 - August 8, 2015

* Build: Add release scripts to package.json (Casey Visco)
* Build: Add release tasks to makefile (Casey Visco)
* Build: Add changelog task to makefile (Casey Visco)
* Build: Add checkRules task to makefile (Casey Visco)
* Build: Move lint and test tasks to makefile (Casey Visco)
* Fix typo in default setting for enforce-define (Casey Visco)

### v0.5.2 - August 8, 2015

* Prevent no-commonjs-return false positive (fixes #36) (Casey Visco)
* Build: Bump eslint version to 1.1.0 (Casey Visco)
* Update: Provide schema for enforce-define rule (Casey Visco)
* Build: Bump eslint version to 1.0.0 (Casey Visco)

### v0.5.1 - July 20, 2015

* Fix: Compare basename against ignore list in enforce-define (fixes #33) (Casey Visco)

### v0.5.0 - July 20, 2015

* New: Implement enforce-define rule (fixes #28) (Casey Visco)
* Build: Upgrade eslint and eslint-tester versions (Casey Visco)

### v0.4.2 - June 29, 2015

* Fix: only include string literals in array returned from util.getDependencyNodes (fixes #32) (Casey Visco)

### v0.4.1 - June 25, 2015

* Fix: no-invalid-define rule affecting other rules (Andrew Sutton)

### v0.4.0 - June 13, 2015

* New: Implement no-invalid-require rule (fixes #19)
* New: Implement no-js-extension rule (fixes #29)
* Fix: Warn on invalid callback in no-invalid-require rule (fixes #30)
* Update: Cleanup code in `util#isValidRequire`
* Build: Execute coverage as part of `npm test`

### v0.3.0 - April 27, 2015

* New: Implement no-dynamic-require rule (fixes #18)
* New: Implement no-conditional-require rule (fixes #22)
* New: Implement no-require-tourl rule (fixes #21)
* New: Implement no-assign-require rule (fixes #20)
* Fix: Verify callee is an Identifier when testing CallExpression name (fixes #25)

### v0.2.3 - April 19, 2015

* Fix: Prevent rules from warning on non-define calls (fixes #23)

### v0.2.2 - April 16, 2015

* Update: Remove unused helpers lib
* Docs: Clarify installation instructions
* Docs: Add link to CHANGELOG from README

### v0.2.1 - April 16, 2015

* Fix: Permit named modules in no-invalid-define rule (fixes #17)
* Fix: Flag named AMD module definitions as warning in no-amd-define (fixes #16)
* Fix: Flag named CommonJS definitions as warning in no-commonjs-wrapper (fixes #15)
* Fix: Flag named function definitions as warning in no-function-define (fixes #14)
* Fix: Flag named object modules as warning in no-object-define (fixes #13)
* Fix: Allow other forms of named modules in no-named-define (fixes #12)

### v0.2.0 - April 13, 2015

* Docs: Link to RequireJS home page from README
* Docs: Sort rules in README by type (fixes #9)
* New: Implement no-commonjs-module-exports rule (fixes #11)
* New: Implement no-commonjs-exports rule (fixes #3)
* New: Implement no-commonjs-return rule (fixes #4)
* New: Implement no-assign-exports rule (fixes #6)

### v0.1.2 - April 3, 2015

* Fix: Allow plugin to work with wider range of eslint versions (fixes #8)

### v0.1.1 - April 2, 2015

* Docs: Cleanup README

### v0.1.0 - March 30, 2015

* Initial Release
