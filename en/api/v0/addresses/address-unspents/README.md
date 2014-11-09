## addressUnspents

    GET <API_ENDPOINT>/v0/<CHAIN>/address-unspents/<ADDRESS>

Returns a [Address object](../addressobject) and an array of Unspent [Transaction objects](../../transactions/transactionobject/) for the Address specified by the [`<CHAIN>`](../../notes/chains/) and `<ADDRESS>` values.

By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detail-and-pagination/) use the
?showtxn=1 and showtxnio=1 query parameters.

Examples
* [BTC Address Unspents](https://api.blockstrap.com/v0/btc/address/unspents/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)

Example Output (from [here](https://api.blockstrap.com/v0/btc/address/unspents/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)
    


#### Also see
* [Address object](../addressobject/) For a full breakdown of the elements
* [Transaction details and Pagination](../../notes/detail-and-pagination/)
* [Values and Currency](../../notes/values-and-currencies/) How we handle values and currencies
* [Request object](../../notes/requestobject/)
* [Supported Chains](../../notes/chains/)

#### Access Criteria
* GET
* There is no sensitive or custom information in the data returned by this API method.
* HTTP or HTTPS
* No API key required, but subjected to [usage/rate limits](../../notes/limits-and-tiers/).
* If API key provided, then subject to [Usage Tiers](../../notes/limits-and-tiers/).


1. [Return to API](../../../)
1. [Return to Addresses](../)
1. [Address object](../addressobject/)
1. [Address](../address-id/)
1. [Addresses](../address-ids/)
1. [Address Transactions](../address-transactions/)
1. [Address Unspents](../address-unspents/)
1. [Address From Hash 160](../address-from-hash160/)
