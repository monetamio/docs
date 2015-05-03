## Blockstrap Faucets

The Blockstrap Faucets provide a way to host your own multi-currency faucets.

-----

___Please note that the current version also requires the relevant QTs to be available locally___.

_However_, it does not store any coins locally and only uses the nodes to sign un-signed raw transactions, in favour of requiring PHP-GMP.

It is a standalone PHP application that requires an Apache Server with CURL functionality. It utilizes the BlockStrap [API](../../../api/) and [PHP SDK](../../../sdks/php/) to register and retreave credentials to and from all supported blockchains, as well as requiring a [Mandrill](http://mandrill.com) API Key to send confirmation codes, as seen below:

[![faucets.blockstrap.com](../../../_libs/img/docs/applications/faucets/home.png)](http://faucets.blockstrap.com)

For more information pertaining to this application please see the following:

* [Live Demo](http://facuets.blockstrap.com/)
* [Installing Faucets](installation/)
* [Downloads](../../downloads/)

The full-source code is available on [GitHub](http://github.com/blockstrap/faucets/).

-----

1. Related Articles
4. [Table of Contents](../../)