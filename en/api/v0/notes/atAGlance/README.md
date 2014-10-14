## At A Glance

A Cheatsheet of Blockstrap API methods.

Notes:
* `<API_ENDPOINT>` http://api.blockstrap.com OR https://api.blockstrap.com
* `<CHN>` Chain to use (xxx**T**=Testnet): BTC, BTCT, DOGE, DOGT, LTC, LTCT, PPC, PPCT
* Transaction information, add to query string: `?showtxn=1` `?showtxnio=1`
* Address functions include pagination query string options: `records=500`, `skip=1000`
* Values are in Satoshi (or chain equivalent) Fiat currencies are approximate values.


| Method | URL | Notes |
|--------|-----|-------|
|block|`<API_ENDPOINT>/v0/<CHN>/block/<BLOCKHASH>`|None|
|blockLatest|`<API_ENDPOINT>/v0/<CHN>/blockLatest`|None|
|blockHeight|`<API_ENDPOINT>/v0/<CHN>/blockHeight/<INT_HEIGHT>`|None|


1. [Return to API](../../../)
1. [Return to Notes](../)
1. [Top of the chain](../topOfTheChain/)
1. [BlockHeight](../blockHeight/)
1. [BlockLatest](../blockLatest/)
1. [Table of Contents](../../../../)
