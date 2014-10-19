## addressHash160ToAddress

    GET <API_ENDPOINT>/v0/<CHAIN>/addressHash160ToAddress/<ADDRESS_HASH>

Returns an address for the block specified by the [`<CHAIN>`](../../notes/chains/) and `<ADDRESS_HASH>` values.

Only the id of the address is returned.

Examples
* [LTC Address hash conversion](https://api.blockstrap.com/v0/ltc/addressHash160ToAddress/8C17E5D45F01004A83BF373635DAC2788ED5791B/?prettyprint=1)

Example Output (from [here](https://api.blockstrap.com/v0/ltc/addressHash160ToAddress/8C17E5D45F01004A83BF373635DAC2788ED5791B/?prettyprint=1)
    {
        "status": "success",
        "data": {
            "Address": {
                "id": "LXzhVWrcUUeg53dWysbZopqjTRz2ZDL7YM"
            },
            "_request": {
                <REQUEST_OBJECT>
            }
        }
    }   


#### Also see
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
1. [address](../address/)
1. [addresses](../addresses/)
1. [addressTransactions](../addressTransactions/)
1. [addressUnspents](../addressUnspents/)
1. [addressHash160ToAddress](../addressHash160ToAddress/)
