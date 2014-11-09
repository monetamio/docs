## Latest Block

    GET <API_ENDPOINT>/v0/<CHAIN>/block/latest/<INT_COUNT>

Returns information for the most recent Block processed by the Blockstrap API 
for the specified [`<CHAIN>`](../../notes/chains/)

Returns a [Block object](../blockobject/). 
By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detail-and-pagination/) use the
?showtxn=1 and showtxnio=1 query parameters.

Note: Because the latest block is most likely at the top of the block chain you
must be aware of the [gotchas at the top of the blockchain](../../notes/top-of-the-chain/).


### Examples
* [BTC Latest block](https://api.blockstrap.com/v0/btc/block/latest?prettyprint=1)
* [DOGE Latest block](https://api.blockstrap.com/v0/doge/block/latest?prettyprint=1)
* [LTC Latest 3 blocks](https://api.blockstrap.com/v0/ltc/block/latest/3?prettyprint=1)

Example Output

    {
        "status": "success",
        "data": {
            "Block": {
                "id": "2A75A531E41FC27AE94C677F10D1921C691CA07B0D7015A87CD5F842F1D226BA",
                "height": 157995,
                "version": 6422530,
                "merkel_root": "01414FB7FCFE2A7AF0603AC5C75426756CDF8F4622EDDBC2DD09BC9BA46F2B5B",
                "time": 1407214382,
                "nonce": 820187392,
                "chainwork": "000000000000000000000000000000000000000000000000000000000000000000542BB5CEA3",
                "bits": "503847802",
                "prev_block_id": "BD8FC5732FDDC4800D7948952E378C8D38D2809050855442F0A7F61A1F9EAE9B",
                "next_block_id": "",
                "_confirmations": 0,
                "_is_main_chain": 1,
                "_tx_count": 1,
                "_coinbase": 25000000000000,
                "_coinbase_fiat_now": 0,
                "_coinbase_disp": "250,000.00000000",
                "_input_value": 0,
                "_input_value_fiat_now": 0,
                "_input_value_disp": "0.00000000",
                "_output_value": 25000000000000,
                "_output_value_fiat_now": 0,
                "_output_value_disp": "250,000.00000000",
                "_fees": 0,
                "_fees_fiat_now": 0,
                "_fees_disp": "0.00000000",
                "_total_satoshies": 6461901501800000000,
                "_total_seconds": 15711093,
                "_satoshi_seconds": 9223372036854775807,
                "_total_satoshi_seconds": 9223372036854775807,
                "_destroyed_satoshi_seconds": 0,
                "Transactions": [
                    {
                        "id": "01414FB7FCFE2A7AF0603AC5C75426756CDF8F4622EDDBC2DD09BC9BA46F2B5B",
                        "_can_cache": 0
                    }
                ]
            },
            "_request": {
                <REQUEST_OBJECT>
            }
        }
    }

#### Also see
* [Block object](../blockobject/) For a full breakdown of the elements
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
1. [Return to Blocks](../)
1. [Block object](../blockobject/)
1. [block](../block-id/)
1. [blockHeight](../block-height/)
1. [blockLatest](../block-latest/)
1. [Table of Contents](../../../../)
