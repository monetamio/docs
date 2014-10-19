## addressUnspents

    GET <API_ENDPOINT>/v0/<CHAIN>/addressUnspents/<ADDRESS>

Returns a [Address object](../addressobject) and an array of Unspent [Transaction objects](../../transactions/transactionobject/) for the Address specified by the [`<CHAIN>`](../../notes/chains/) and `<ADDRESS>` values.

By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detailAndPagination/) use the
?showtxn=1 and showtxnio=1 query parameters.

Examples
* [BTC Address Unspents](https://api.blockstrap.com/v0/btc/addressUnspents/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)

Example Output (from [here](https://api.blockstrap.com/v0/btc/addressUnspents/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)
    


#### Also see
* [Address object](../addressobject/) For a full breakdown of the elements
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
1. [Return to Addresses](../)
1. [Address object](../addressobject/)
1. [Address](../address/)
1. [Addresses](../addresses/)
1. [AddressTransactions](../addressTransactions/)
1. [AddressUnspents](../addressUnspents/)
1. [AddressHash160ToAddress](../addressHash160ToAddress/)
