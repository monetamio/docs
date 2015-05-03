## At A Glance

A cheatsheet of Blockstrap API methods.

Notes:
* `<API_ENDPOINT>` http://api.blockstrap.com OR https://api.blockstrap.com
* `<CHN>` Chain to use (xxx**T** = **testnet**): BTC, BTCT, DOGE, DOGT, LTC, LTCT, DASH, DASHT
* Additional transaction information, add to query string: `?showtxn=1` `?showtxnio=1`
* Address functions include pagination query string options: `records=500`, `skip=1000`
* Values are in Satoshi (or chain equivalent) Fiat currencies are approximate values.
* [Block object](../../blocks/blockobject/) - [Transaction object](../../transactions/transactionobject/) -
[Address object](../../addresses/addressobject/) -[Request object](../requestobject/)

### Example calls

| Method | URL | Notes |
|--------|-----|-------|
|Block|`<API_ENDPOINT>/v0/<CHN>/block/id/<BLOCKHASH>`|None|
|Block Latest|`<API_ENDPOINT>/v0/<CHN>/block/latest`|None|
|Blocks Latest|`<API_ENDPOINT>/v0/<CHN>/block/latest/<INT_COUNT>`|Max 10|
|Block Height|`<API_ENDPOINT>/v0/<CHN>/block/height/<INT_HEIGHT>`|None|
|Transaction|`<API_ENDPOINT>/v0/<CHN>/transaction/id/<TXN_ID>`|None|
|Transaction Decode|`<API_ENDPOINT>/v0/<CHN>/transaction/decode/<TXN_HEX>`|None|
|Transaction Relay|`<API_ENDPOINT>/v0/<CHN>/transaction/relay/<TXN_Relay>`|None|
|Address|`<API_ENDPOINT>/v0/<CHN>/address/id/<ADDRESS>`|None|
|Addresses|`<API_ENDPOINT>/v0/<CHN>/address/ids/<ADDRESS>,<ADDRESS>`|None|
|Address Transactions|`<API_ENDPOINT>/v0/<CHN>/address/transactions/<ADDRESS>`|None|
|Address Unspents|`<API_ENDPOINT>/v0/<CHN>/address/unspents/<ADDRESS>`|None|




1. [Return to API](../../../)
1. [Return to Notes](../)
1. [Table of Contents](../../../../)
