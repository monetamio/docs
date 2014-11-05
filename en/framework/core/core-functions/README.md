Core Functions <a name="docs_home"></a>
=======================================

### Core Functions & Variables

This is often called by first setting `var bs = $.fn.blockstrap;`.

You can then use the following functions once core has been fully initialized:

* [`bs.ago`(time)](#bs_ago)
* [`bs.add_actions`(hook, key, bs_module, bs_function, vars)](#bs_add_actions)
* [`bs.apply_actions`(hook)](#bs_apply_actions)
* [`bs.boot`(bootstrap, key, html, index, callback)](#bs_boot)
* [`bs.bootstrap`(index, bootstrap, callback)](#bs_bootstrap)
* [`bs.buttons`()](#bs_buttons)
* [`bs.confirm`(title, content, callback)](#bs_confirm)
* [`bs.css`(callback)](#bs_css)
* [`bs.defaults`()](#bs_defaults)
* [`bs.filter`(data)](#bs_filter)
* [`bs.forms`()](#bs_forms)
* [`bs.get`(file, extension, callback)](#bs_get)
* [`bs.image`(input, callback)](#bs_image)
* [`bs.init`()](#bs_init)
* [`bs.less`(callback)](#bs_less)
* [`bs.loaded`()](#bs_loaded)
* [`bs.loader`(force_state, element)](#bs_loader)
* [`bs.loading`()](#bs_loading)
* [`bs.modal`(title, content, id)](#bs_modal)
* [`bs.modals`(action)](#bs_modals)
* [`bs.nav`(slug)](#bs_nav)
* [`bs.page`()](#bs_page)
* [`bs.print`(contents)](#bs_print)
* [`bs.publicize`(callback)](#bs_publicize)
* [`bs.ready`()](#bs_ready)
* [`bs.refresh`(callback, slug, skip_rendering, force_both_to_render)](#bs_refresh)
* [`bs.reset`(reload)](#bs_reset)
* [`bs.resize`(delay)](#bs_resize)
* [`bs.resized`(delay)](#bs_resized)
* [`bs.salt`(modules, callback, salt)](#bs_salt)
* [`bs.settings`(element)](#bs_settings)
* [`bs.stringed`(styles)](#bs_stringed)
* [`bs.table`()](#bs_table)
* [`bs.tests`(run)](#bs_tests)

--------------------------------------------------------------------------------

#### `bs.ago`(time) <a name="bs_ago" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

This function takes a timestamp (in seconds) and converts it into a written phrase, such as one minute ago. If your time is set to milliseconds, convert it by one thousand (1,000) before running it through the function. Multi-lingual options will be available before reaching version 1.0.

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.add_actions`(hook, key, bs_module, bs_function, vars) <a name="bs_add_actions" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

This function allows you to add custom functionality into critical core processes without needing to edit core files. It works in a way very similar to the add and apply_actions functions found in WordPress. The `hook` variable defines which event you would like to tie your action to. The current hooks available within core include:

* `init`
* `init_callback`

The `key` is used as a unique identifier for each function you would like to attach to the hook.

The `bs_module` and `bs_function` variables allow you to define which function from which module you would like to run at the event, whereas the `vars` variable allows you to attach additional information to the function being called.

An example of this can be seen in `/plugins/markets/markets.js` as follows:

<!--pre-javascript-->
```
var conditions = 'something-important-to-pass-on';
$.fn.blockstrap.core.add_actions(
    'init', 
    'market_updates',
    'plugins.markets', 
    'update', 
    conditions
);
```

It is worth noting that calling regular modules does not require dot notation, but should you wish to call a plugin function you need to add the word plugin folowed by a dot and then the plugin name in order to access its functions (as seen on line 5 above).

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.apply_actions`(hook) <a name="bs_apply_actions" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

This function attempts to call all the actions added the relevant `hook`.

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.boot`(bootstrap, key, html, index, callback) <a name="bs_boot" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

This function loads each select Bootstrap component into `$.fn.blockstrap.snippets`.

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.bootstrap`(index, bootstrap, callback) <a name="bs_bootstrap" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

This function cycles through an array to load the necessary components using `$.fn.blockstrap.core.boot()`.

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.buttons`(classes, ids) <a name="bs_buttons" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

If no classes or IDs are passed into the function (as seen when loaded automatically during initialization) this function will check the configuration settings to determine which button classes and IDs to apply the assigned functions to. If arrays of classes and IDs are passed into the function, it will initiative the newly assigned buttons.

If the classes array contianed the following:

<!--pre-javascript-->
```
{
    "classes": [
        "print",
        "qr"
    ]
}
```

This would try to assign the `$.fn.blocstrap.buttons.print` and `$.fn.blockstrap.buttons.qr` functions to the `.btn-print` and `.btn-qr` elements. Please note that classes that you wish to auto assign need to be prefixed with `btn`. If it could not find the necessary functionality within the `buttons` module it would attempt to seek out the same functions from `$.fn.blockstrap.theme.buttons.print` and `$.fn.blockstrap.theme.buttons.qr` before cancelling its self assignment.

In the case of IDs, dashes in IDs get converted to underscores, so the following array:

<!--pre-javascript-->
```
{
    "ids": [
        "submit-payment"
    ]
}
```

Would try to assign the `submit_payment` function to an element with an ID of `submit-payment`.

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.confirm`(title, content, callback) <a name="bs_confirm" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.css`(callback) <a name="bs_css" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.defaults`() <a name="bs_defaults" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.filter`(data) <a name="bs_filter" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.forms`() <a name="bs_forms" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.get`(file, extension, callback) <a name="bs_get" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.image`(input, callback) <a name="bs_image" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.init`() <a name="bs_init" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.less`(callback) <a name="bs_less" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.loaded`() <a name="bs_loaded" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.loader`(force_state, element) <a name="bs_loader" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.loading`() <a name="bs_loading" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.modal`(title, content, id) <a name="bs_modal" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.modals`(action) <a name="bs_modals" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.nav`(slug) <a name="bs_nav" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.page`() <a name="bs_page" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.print`(contents) <a name="bs_print" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.publicize`(callback) <a name="bs_publicize" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.ready`() <a name="bs_ready" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.refresh`(callback, slug, skip_rendering, force_both_to_render) <a name="bs_refresh" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.reset`(reload) <a name="bs_reset" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.resize`(delay) <a name="bs_resize" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.resized`(delay) <a name="bs_resized" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.salt`(modules, callback, salt) <a name="bs_salt" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.settings`(element) <a name="bs_settings" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.stringed`(styles) <a name="bs_stringed" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.table`() <a name="bs_table" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

--------------------------------------------------------------------------------

#### `bs.tests`(run) <a name="bs_tests" class="pull-right" href="#docs_home"><i class="glyphicon glyphicon-upload"></i>- back to top</a>

And then?

<small><a href="#docs_home">- back to top</a></small>

---

1. Related Articles
2. [Return to Core](../../core/)
2. [Configuration Settings](../configuration/)
3. [Defaults](../defaults/)
4. [Core Functions](../core-functions/)
5. [Blockstrap Functions](../blockstrap-functions/)
6. [Plugin Construct](../construct/)
7. [Table of Contents](../../../)
