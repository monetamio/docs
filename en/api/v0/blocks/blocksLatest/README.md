## Latest Blocks

    GET <API_ENDPOINT>/v0/<CHAIN>/blocksLatest/<INTEGER_COUNT>

Returns information for the most recent Blocks processed by the Blockstrap API 
for the specified [`<CHAIN>`](../../notes/chains/)

Returns an array of [Block objects](../blockobject/).  
`<INTEGER_COUNT>` The number of Blocks to return. Max is 10.

By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detailAndPagination/) use the
?showtxn=1 and showtxnio=1 query parameters.

Note: Because the latest block is most likely at the top of the block chain you
must be aware of the [gotchas at the top of the blockchain](../../notes/topOfTheChain/).


### Examples
* [BTC 1 Latest block](https://api.blockstrap.com/v0/btc/blocksLatest/1)
* [DOGE 5 Latest blocks](https://api.blockstrap.com/v0/doge/blocksLatest/5)
* [LTC 10 Latest blocks](https://api.blockstrap.com/v0/ltc/blocksLatest/10)

Example Output


#### Also see
* [Block object](../blockobject/) For a full breakdown of the elements
* [Transaction details and Pagination](../../notes/detailAndPagination/)
* [Values and Currency](../../notes/valuesAndCurrencies/) How we handle values and currencies
* [Request object](../../notes/requestobject/)
* [Supported Chains](../../notes/chains/)

#### Access Criteria
* GET
* There is no sensitive or custom information in the data returned by this API method.
* HTTP or HTTPS
* No API key required, but subjected to [usage/rate limits](../../notes/limitsAndTiers/).
* If API key provided, then subject to [Usage Tiers](../../notes/limitsAndTiers/).


1. [Return to API](../../../)
1. [Return to Blocks](../)
1. [Block object](../blockobject/)
1. [Block](../block/)
1. [BlockHeight](../blockHeight/)
1. [BlockLatest](../blockLatest/)
1. [BlocksLatest](../blocksLatest/)
1. [Table of Contents](../../../../)
