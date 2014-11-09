## Addresses

    GET <API_ENDPOINT>/v0/<CHAIN>/address/ids/<ADDRESS>,<ADDRESS>

Returns multiple [Address objects](../addressobject) for the Address specified by the [`<CHAIN>`](../../notes/chains/) and comma delimited `<ADDRESS>` values.

A maximum of 20 addresses can be queried at once.

By default, no Transaction information is returned. For additional [Transaction details](../../notes/detail-and-pagination/) use the
?showtxn=1
Note that showtxnio is disabled for this method, as the resulting data structures have the potential to be HUGE!

Examples
* [BTC 2 Addresses](https://api.blockstrap.com/v0/btc/address/ids/16sEpWHMLZDUueqRQ8qKwjXCeJKaL8AbZB,18cGae7j8DmHjYBX19kYju3pZ1ccSu7F6N?prettyprint=1)

Example Output (from [here](https://api.blockstrap.com/v0/btc/address/ids/16sEpWHMLZDUueqRQ8qKwjXCeJKaL8AbZB,18cGae7j8DmHjYBX19kYju3pZ1ccSu7F6N?prettyprint=1))
    {
        "status": "success",
        "data": {
            "addresses": [
                {
                    "address": {
                        "address_hash160": "4058f66af96171a443242217aca2a22ba2878aee",
                        "address": "16sEpWHMLZDUueqRQ8qKwjXCeJKaL8AbZB",
                        "outputs_count_confirmed": 0,
                        "outputs_value_confirmed": 0,
                        "inputs_count_confirmed": 2,
                        "inputs_value_confirmed": 20000,
                        "outputs_count_unconfirmed": 0,
                        "outputs_value_unconfirmed": 0,
                        "inputs_count_unconfirmed": 0,
                        "inputs_value_unconfirmed": 0,
                        "outputs_count_total": 0,
                        "inputs_count_total": 2,
                        "inout_count_total": 2,
                        "outputs_value_total": 0,
                        "outputs_value_total_fiat_now": "0.00",
                        "outputs_value_total_disp": "0.00000000",
                        "inputs_value_total": 20000,
                        "inputs_value_total_fiat_now": "0.08",
                        "inputs_value_total_disp": "0.00020000",
                        "inout_value_total": 20000,
                        "inout_value_total_fiat_now": "0.08",
                        "inout_value_total_disp": "0.00020000",
                        "balance": 20000,
                        "balance_fiat_now": "0.08",
                        "balance_disp": "0.00020000",
                        "balance_confirmations_required": 0,
                        "transactions": [

                        ]
                    }
                },
                {
                    "address": {
                        "address_hash160": "537471d65bfddf28182f61c17f17ed5b16fc03dc",
                        "address": "18cGae7j8DmHjYBX19kYju3pZ1ccSu7F6N",
                        "outputs_count_confirmed": 2,
                        "outputs_value_confirmed": 180000,
                        "inputs_count_confirmed": 4,
                        "inputs_value_confirmed": 340000,
                        "outputs_count_unconfirmed": 0,
                        "outputs_value_unconfirmed": 0,
                        "inputs_count_unconfirmed": 0,
                        "inputs_value_unconfirmed": 0,
                        "outputs_count_total": 2,
                        "inputs_count_total": 4,
                        "inout_count_total": 6,
                        "outputs_value_total": 180000,
                        "outputs_value_total_fiat_now": "0.69",
                        "outputs_value_total_disp": "0.00180000",
                        "inputs_value_total": 340000,
                        "inputs_value_total_fiat_now": "1.31",
                        "inputs_value_total_disp": "0.00340000",
                        "inout_value_total": 520000,
                        "inout_value_total_fiat_now": "2.01",
                        "inout_value_total_disp": "0.00520000",
                        "balance": 160000,
                        "balance_fiat_now": "0.62",
                        "balance_disp": "0.00160000",
                        "balance_confirmations_required": 0,
                        "transactions": [

                        ]
                    }
                }
            ],
            "_request": {
                <REQUEST_OBJECT>
            }
        }
    }
    


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
1. [address](../address-id/)
1. [addresses](../address-ids/)
1. [addressTransactions](../address-transactions/)
1. [addressUnspents](../address-unspents/)
1. [AddressHash160ToAddress](../address-from-hash160/)
