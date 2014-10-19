## Address

    GET <API_ENDPOINT>/v0/<CHAIN>/address/<ADDRESS>

Returns a [Address object](../addressobject) for the Address specified by the [`<CHAIN>`](../../notes/chains/) and `<ADDRESS>` values.

By default, no Transaction information is returned. For additional Transaction details use the ?showtxn=1 &showtxnio=1 query parameters.


Examples
* [BTC "Where To Spend Bitcoins UK"'s Address](https://api.blockstrap.com/v0/btc/address/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)

Example Output
    {
        "status": "success",
        "data": {
            "address": {
                "address_hash160": "a8bcf2bb4f5a2555f16c126131c5cf1ffa064326",
                "address": "1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK",
                "outputs_count_confirmed": 19,
                "outputs_value_confirmed": 132892785,
                "inputs_count_confirmed": 28,
                "inputs_value_confirmed": 135133812,
                "outputs_count_unconfirmed": 0,
                "outputs_value_unconfirmed": 0,
                "inputs_count_unconfirmed": 0,
                "inputs_value_unconfirmed": 0,
                "outputs_count_total": 19,
                "inputs_count_total": 28,
                "inout_count_total": 47,
                "outputs_value_total": 132892785,
                "outputs_value_total_fiat_now": "515.27",
                "outputs_value_total_disp": "1.32892785",
                "inputs_value_total": 135133812,
                "inputs_value_total_fiat_now": "523.96",
                "inputs_value_total_disp": "1.35133812",
                "inout_value_total": 268026597,
                "inout_value_total_fiat_now": "1,039.24",
                "inout_value_total_disp": "2.68026597",
                "balance": 2241027,
                "balance_fiat_now": "8.69",
                "balance_disp": "0.02241027",
                "balance_confirmations_required": 0
            },
            "_request": {
                <REQUEST_OBJECT>
            }
        }
    }


#### Also see
* [Address object](../addressobject/) For a full breakdown of the elements
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
1. [address](../address/)
1. [addresses](../addresses/)
1. [addressTransactions](../addressTransactions/)
1. [addressUnspents](../addressUnspents/)
1. [addressHash160ToAddress](../addressHash160ToAddress/)
