Blockstrap Change Log
=====================

This page should contain all the relevant changes made to the entire Blockstrap stack. It should be in reverse chronological order.

-----------------

#### April, 2015: [Framework](../framework/) __v0.5.0.1__

The following new functions were added:

* bs.core.add_commas
* bs.core.patch
* bs.core.test_results_table
* bs.core.txt
* bs.core.upgrade
* secret config
* markets plugin cache
* import and export wallet as file
* blockstrap API key options
* added dashpay support
* add account action icon buttons
* replace addresses in recent transaction widget with account name
* cache options for config, snippets, html, data, plugins and css

The following important bug fixes took place:

* prevent bitcoinjs-lib from caching (due to IE)
* prevent sending coins to wrong blockchain
* transaction pagination support
* prevent creation of transactions with zero change

The following filters were added:

* ready

The following new examples were added:

* manual installation (no AJAX) example
* multiple API provider tests

The following components were deprecated:

* bs.currencies now bs.blockchains

--------------------------------------------------------------------------------

1. Related Articles
2. [Downloads](../downloads/)
3. [Table of Contents](../../)
