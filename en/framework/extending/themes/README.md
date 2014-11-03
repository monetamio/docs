Blockstrap Themes
=================

Themes are folders with specific structure placed in specific folders.

By default, they should be found in the `/themes/` folder.

Blockstrap currently comes with packaged with the following themes:

* [Wallet](../../../applications/wallet/)
* [Prioritizer](../../../applications/wallet/)

Blockstrap is able to internally utilize the following folders:

* `css` - loaded from [configured](../../core/configuration/) `css: []` array
* `data` - loaded based upon [URL routing](../../assets/mustache/#mustache_routing)
* `html` - loaded based upon [URL routing](../../assets/mustache/#mustache_routing)
* `js/dependencies` - loaded from [configured](../../core/configuration/) `dependencies: []` array
* `js/modules` - loaded from [configured](../../core/configuration/) `modules: []` array

It also looks for the following files:

* `js/options.js` - this is the [theme configuration](../../core/configuration/) 
* `js/dependencies/steps.js` - this is the setup configuration file
* `js/modules/theme.js` - this is an auto-loaded module available

The benefits of including a `theme.js` module can be seen from the auto-loading of [buttons](../buttons/) and [filters](../filters/) that are contained therein.

--------------------------------------------------------------------------------

1. Related Articles
2. [Return to Extending](../../extending/)
3. [Themes](../themes/)
4. [Plugins](../plugins/)
5. [Buttons](../buttons/)
6. [Filters](../filters/)
7. [Hooks](../hooks/)
8. [Snippets](../snippets/)
9. [Table of Contents](../../../)
