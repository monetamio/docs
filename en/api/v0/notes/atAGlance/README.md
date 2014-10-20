## At A Glance

A Cheatsheet of Blockstrap API methods.

Notes:
* `<API_ENDPOINT>` http://api.blockstrap.com OR https://api.blockstrap.com
* `<CHN>` Chain to use (xxx**T**=Testnet): BTC, BTCT, DOGE, DOGT, LTC, LTCT, PPC, PPCT
* Additional Transaction information, add to query string: `?showtxn=1` `?showtxnio=1`
* Address functions include pagination query string options: `records=500`, `skip=1000`
* Values are in Satoshi (or chain equivalent) Fiat currencies are approximate values.
* [Block object](../../blocks/blockobject/) - [Transaction object](../../transactions/transactionobject/) -
[Address object](../../addresses/addressobject/) -[Request object](../requestobject/)


| Method | URL | Notes |
|--------|-----|-------|
|block|`<API_ENDPOINT>/v0/<CHN>/block/<BLOCKHASH>`|None|
|blockLatest|`<API_ENDPOINT>/v0/<CHN>/blockLatest`|None|
|blocksLatest|`<API_ENDPOINT>/v0/<CHN>/blocksLatest/<INT_COUNT>`|Max 10|
|blockHeight|`<API_ENDPOINT>/v0/<CHN>/blockHeight/<INT_HEIGHT>`|None|
|transaction|`<API_ENDPOINT>/v0/<CHN>/transaction/<TXN_ID>`|None|
|transactionDecode|`<API_ENDPOINT>/v0/<CHN>/transactionDecode/<TXN_HEX>`|None|
|transactionRelay|`<API_ENDPOINT>/v0/<CHN>/transactionRelay/<TXN_Relay>`|None|
|address|`<API_ENDPOINT>/v0/<CHN>/address/<ADDRESS>`|None|
|addresses|`<API_ENDPOINT>/v0/<CHN>/addresses/<ADDRESS>,<ADDRESS>`|None|
|addressTransactions|`<API_ENDPOINT>/v0/<CHN>/addressTransactions/<ADDRESS>`|None|
|addressUnspents|`<API_ENDPOINT>/v0/<CHN>/addressUnspents/<ADDRESS>`|None|




1. [Return to API](../../../)
1. [Return to Notes](../)
1. [Table of Contents](../../../../)
