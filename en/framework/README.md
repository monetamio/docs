## Blockstrap Framework

The Blockstrap Framework is a component of the Blockstrap Stack. It provides a front-end HTML5 interface for web-applications to communicate and manipulate blockchains and other dynamic data stores via external APIs. By default, it is configured to use the [Blockstrap API](../api/) but is API-neutral throughout. This allows you to host and manage your own API end-points or select from others configured at core, with examples included for the following services:

* [Blockchains.io](http://blockchains.io) (6 Chains)
* [SoChain.io](http://chain.so) (6 Chains)
* [Blockr.io](http://blockr.io) (4 Chains)
* [HelloBlock.io](https://helloblock.io/) (BTC only)

However, please note that the default [wallet]() application included with [core]() allows you to choose which API to use, it does not provide different lists of supported currencies based on the support of that API. By default, it shows support for six blockchains, but only two of the supported API services provide support for all six chains. Those blockchains supported by [Blockchains.io](http://blockchains.io) and [SoChain](http://chain.so) are:

* [Bitcoin](http://blockchains.io/btc/blocks/)
* [Litecoin](http://blockchains.io/ltc/blocks/)
* [Dogecoin](http://blockchains.io/doge/blocks/)
* [Bitcoin Testnet](http://blockchains.io/btct/blocks/)
* [Litecoin Testnet](http://blockchains.io/ltct/blocks/)
* [Dogecoin Testnet](http://blockchains.io/dogt/blocks/)

The Framework has been developed with modularity and flexibility as the focal point of each technical decision. Currently providing a choice of 11 interchangable modules, features can be easily extended, included, replaced or removed depending on the need of each application.

These [modules](modules/) include:

* [Accounts](modules/accounts/)
* [API](modules/api/)
* [Buttons](modules/buttons/)
* [Contacts](modules/contacts/)
* [Currencies](modules/currencies/)
* [Data](modules/data/)
* [Filters](modules/filters/)
* [Forms](modules/forms/)
* [Security](modules/security/)
* [Styles](modules/styles/)
* [Templates](modules/templates/)

The current disribution of Blockstrap not only includes the core modules listed above, but is also bundled with the following sample applications:

* [Wallet](../applications/wallet/)
* [Prioritizer](../applications/prioritizer/)

These sample applications are intended to help demonstrate how Blockstrap can be used in different ways to do very different things. Neither of them have been developed with the intention of being used to store large quantities of coins, and you should only ever send coins to an address where you can verifably demonstrate ownership of the private keys. We have created them so that developers have a starting point for their own ideas.

If you are new to Blockstrap, we would suggest reading some of the following articles:

* [Download](started/download/)
* [Getting Started](started/)
* [Plugin Construct](core/construct/)
* [Extending Blockstrap](extending/)

---

1. Related Articles
2. [Getting Started](started/)
3. [Core](core/)
4. [Modules](modules/)
5. [Assets](assets/)
6. [Extending](extending/)
7. [Styling](styling/)
8. [Table of Contents](../)
