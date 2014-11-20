## Block Height Function

    GET <API_ENDPOINT>/v0/<CHAIN>/block/height/<INTEGER_HEIGHT>

Returns information for *ALL* Blocks at the specified <INTEGER_HEIGHT> for the specified [`<CHAIN>`](../../notes/chains/).
Although rare, there can be multiple Blocks at a given height. Only one is in the Main Chain, the
others are orphaned forks, or forks currently competing to be the Main Chain.

The first Block in the array is the one from the Main Chain.

Returns an array of [Block objects](../blockobject/). 
By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detail-and-pagination/) use the
?showtxn=1 and showtxnio=1 query parameters.

Note: Because the latest block is most likely at the top of the block chain you
must be aware of the [gotchas at the top of the blockchain](../../notes/top-of-the-chain).


### Examples
* [BTC block at height 100](https://api.blockstrap.com/v0/btc/block/height/100?prettyprint=1)
* [BTC 3 blocks at height 317930](https://api.blockstrap.com/v0/btc/block/height/317930?prettyprint=1)
* [DOGE block at height 150000](https://api.blockstrap.com/v0/doge/block/height/150000?prettyprint=1)
* [LTC block at height 101010](https://api.blockstrap.com/v0/ltc/block/height/101010?prettyprint=1)

Example Output
    {
        "status": "success",
        "data": {
            "blocks": [
                {
                    "id": "79B2FAF87AE34C36516AC9943C107CAF8002F030FAC9A87FEB971C1B5F5ECCD4",
                    "size": 188,
                    "height": 1000,
                    "version": 2,
                    "merkel_root": "4B862760EF439DDFA3E3069BEBC74C3E8FD2556A5CE909D2B56C2B7EF364DA24",
                    "time": 1392730635,
                    "time_display": "2014-02-18T13:37:15+00:00",
                    "nonce": 863699456,
                    "chainwork": "00000000000000000000000000000000000000000000000000000000000000000000467AD95D",
                    "bits": "504365055",
                    "prev_block_id": "1618930BEBCBDFFF9657D530DA4B21A6CB494613217DD03F7CC37BA96B5A6590",
                    "next_block_id": "A8FB0EA312DDDCD1D21967809B0A41EAC39655CA8C3B31A7C9B655FC29293B85",
                    "_confirmations": 156995,
                    "_is_main_chain": 1,
                    "_tx_count": 1,
                    "_coinbase": 4500600000000,
                    "_coinbase_fiat_now": 0,
                    "_coinbase_disp": "45,006.00000000",
                    "_input_value": 0,
                    "_input_value_fiat_now": 0,
                    "_input_value_disp": "0.00000000",
                    "_output_value": 4500600000000,
                    "_output_value_fiat_now": 0,
                    "_output_value_disp": "45,006.00000000",
                    "_fees": 0,
                    "_fees_fiat_now": 0,
                    "_fees_disp": "0.00000000",
                    "_total_satoshies": 50008050000000000,
                    "_total_seconds": 1227346,
                    "_satoshi_seconds": 9223372036854775807,
                    "_total_satoshi_seconds": 9223372036854775807,
                    "_destroyed_satoshi_seconds": 0,
                    "Transactions": [
                        {
                            "id": "4B862760EF439DDFA3E3069BEBC74C3E8FD2556A5CE909D2B56C2B7EF364DA24"
                        }
                    ]
                }
            ],
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
* No API key required, but subjected to [usage/rate limits](../../notes/limits-and-tiers).
* If API key provided, then subject to [Usage Tiers](../../notes/limits-and-tiers).


1. [Return to API](../../../)
1. [Return to Blocks](../)
1. [Block Object](../blockobject/)
1. [block](../block-id/)
1. [blockHeight](../block-height/)
1. [blockLatest](../block-latest/)
1. [Table of Contents](../../../../)
