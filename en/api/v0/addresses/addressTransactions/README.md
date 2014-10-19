## addressTransactions

    GET <API_ENDPOINT>/v0/<CHAIN>/addressTransactions/<ADDRESS>

Returns a [Address object](../addressobject/) and an array of [Transaction objects](../../transactions/transactionobject/) for the Address specified by the [`<CHAIN>`](../../notes/chains/) and `<ADDRESS>` values.

By default, only minimal Address Transaction information is returned. For additional [Transaction details](../../notes/detailAndPagination/) use the
?showtxnio=1 query parameters.

Examples
* [BTC Address](https://api.blockstrap.com/v0/btc/addressTransactions/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1)

Example Output (from [here](https://api.blockstrap.com/v0/btc/addressTransactions/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1))
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
                "outputs_value_total_fiat_now": "512.98",
                "outputs_value_total_disp": "1.32892785",
                "inputs_value_total": 135133812,
                "inputs_value_total_fiat_now": "521.63",
                "inputs_value_total_disp": "1.35133812",
                "inout_value_total": 268026597,
                "inout_value_total_fiat_now": "1,034.60",
                "inout_value_total_disp": "2.68026597",
                "balance": 2241027,
                "balance_fiat_now": "8.65",
                "balance_disp": "0.02241027",
                "balance_confirmations_required": 0,
                "transactions": [
                    {
                        "id": "D07F42B694A4A0E2F2ED417CCE58FE2557CA97AC602510A25903F20A725C871E",
                        "tx_address_tx_pos": 20,
                        "tx_address_value": 16434,
                        "tx_address_value_fiat_now": 0.06,
                        "tx_address_value_disp": "0.00016434",
                        "tx_address_direction": "input",
                        "tx_address_script_pub_key": "76A914A8BCF2BB4F5A2555F16C126131C5CF1FFA06432688AC",
                        "block_time": 1413707654,
                        "confirmations": 74,
                        "tx_address_ledger": 16434,
                        "tx_address_ledger_fiat_now": 0.06,
                        "tx_address_ledger_disp": "0.00016434"
                    },
                    ...<SNIP_TXN_OBJECTS>
                    ...{
                        "id": "B27C069CB3A10853281F248729F558A9AB448F57B9371383768ECE5BCB87F6DA",
                        "tx_address_tx_pos": 19,
                        "tx_address_value": 26686,
                        "tx_address_value_fiat_now": 0.1,
                        "tx_address_value_disp": "0.00026686",
                        "tx_address_direction": "output",
                        "tx_address_script_pub_key": "76A914A8BCF2BB4F5A2555F16C126131C5CF1FFA06432688AC",
                        "block_time": 1413192279,
                        "confirmations": 963,
                        "tx_address_ledger": -26686,
                        "tx_address_ledger_fiat_now": -0.1,
                        "tx_address_ledger_disp": "-0.00026686"
                    },
                    ...<SNIP_TXN_OBJECTS>
                ]
            },
            "_request": {
                <REQUEST_OBJECT>
            }
        }
    }    


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
1. [address](../address/)
1. [addresses](../addresses/)
1. [addressTransactions](../addressTransactions/)
1. [addressUnspents](../addressUnspents/)
1. [addressHash160ToAddress](../addressHash160ToAddress/)
