## Configuring Blockstrap Core

Each blockstrap application that is powered by core is constructed from three configuration files.

* __Default Configuration__ (`/defaults.json`) - _must be located in the root folder_
* __Custom Configuration__ (`/themes/config.json`) - _assuming `themes` is set by `defaults`_
* __Theme Configuration__ (`/themes/default/config.json`) - _assuming the `default` theme is being used_

If these files are not found in these locations, or in the locations set by each of the corresponding configuration files, blockstrap may fail to function properly. All options can also be provided via regular jQuery plugin intilisation options or via HTML5 data attributes.

-------------------------
### Default Configuration

This is used to set all the defaults for all of the available options that can be configured.

-------------------------
### Custom Configuration

This is used by an application owner to configure universal settings.

-------------------------
### Theme Configuration

This is used by a theme or application owner to configure things relevant to that theme.


---

1. Related Articles
2. [Return to Core](../../core/)
2. [Configuration Settings](../configuration/)
3. [Default Includes](../defaults/)
4. [Core Functions](../core-functions/)
5. [Blockstrap Functions](../blockstrap-functions/)
6. [Plugin Construct](../construct/)
7. [Table of Contents](../../../)
