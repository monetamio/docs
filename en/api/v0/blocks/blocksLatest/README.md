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
* [BTC 1 Latest block](https://api.blockstrap.com/v0/btc/blocksLatest/1?prettyprint=1)
* [DOGE 5 Latest blocks](https://api.blockstrap.com/v0/doge/blocksLatest/5?prettyprint=1)
* [LTC 10 Latest blocks](https://api.blockstrap.com/v0/ltc/blocksLatest/10?prettyprint=1)

Example Output
    {
        "status": "success",
        "data": {
            "blocks": [
                {
                    "id": "00000000000000000983D8F48D0F9C4F569704A1DE7821B0A402D1473FB65EFF",
                    "height": 326054,
                    "version": 2,
                    "merkel_root": "05A9D40F0B5ED53AE950A14F051CA8752FD0256DCD23CC2818E4BBE2CC6DD4C9",
                    "time": 1413740242,
                    "nonce": 1059077794,
                    "chainwork": "00000000000000000000000000000000000000000000000000000002376A6ACBA23F7387D570",
                    "bits": "404711795",
                    "prev_block_id": "00000000000000000223F20FB87D7BC1F0E1AE60C8CC137C9535092EC4E53C19",
                    "next_block_id": "",
                    "confirmations": 0,
                    "is_main_chain": 1,
                    "tx_count": 767,
                    "coinbase": 2500000000,
                    "coinbase_fiat_now": "9,663.87",
                    "coinbase_disp": "25.00000000",
                    "input_value": 314242017953,
                    "input_value_fiat_now": "1,214,718.23",
                    "input_value_disp": "3,142.42017953",
                    "output_value": 316742017953,
                    "output_value_fiat_now": "1,224,382.10",
                    "output_value_disp": "3,167.42017953",
                    "fees": 13176471,
                    "fees_fiat_now": "50.93",
                    "fees_disp": "0.13176471",
                    "total_satoshies": 1340136181308872,
                    "total_seconds": 182733737,
                    "satoshi_seconds": 9223372036854775807,
                    "total_satoshi_seconds": 9223372036854775807,
                    "destroyed_satoshi_seconds": 133536847566895868,
                    "transactions": [
                        {
                            "id": "BFDAF710EBDFA5CD9CF80C90F31A39B31DBB88A9A6710BA788E5431BC6835B81"
                        },
                        ...<SNIP_TXN_OBJECTS>
                    ]
                },
                {
                    "id": "00000000000000000223F20FB87D7BC1F0E1AE60C8CC137C9535092EC4E53C19",
                    "height": 326053,
                    "version": 2,
                    "merkel_root": "59520616C64D5ED275B7FC6B7160D292E1F8BC2BE7A3D0AECF9652943819161B",
                    "time": 1413739551,
                    "nonce": 2305008861,
                    "chainwork": "0000000000000000000000000000000000000000000000000000000237624473FE7DADAA8840",
                    "bits": "404711795",
                    "prev_block_id": "00000000000000001F3B06A9864D9B16BABDFDE396AAD681B0D8C55AC4E55378",
                    "next_block_id": "00000000000000000983D8F48D0F9C4F569704A1DE7821B0A402D1473FB65EFF",
                    "confirmations": 1,
                    "is_main_chain": 1,
                    "tx_count": 1,
                    "coinbase": 2500000000,
                    "coinbase_fiat_now": "9,663.87",
                    "coinbase_disp": "25.00000000",
                    "input_value": 0,
                    "input_value_fiat_now": "0.00",
                    "input_value_disp": "0.00000000",
                    "output_value": 2500000000,
                    "output_value_fiat_now": "9,663.87",
                    "output_value_disp": "25.00000000",
                    "fees": 0,
                    "fees_fiat_now": "0.00",
                    "fees_disp": "0.00000000",
                    "total_satoshies": 1340133681308872,
                    "total_seconds": 182733046,
                    "satoshi_seconds": 9223372036854775807,
                    "total_satoshi_seconds": 9223372036854775807,
                    "destroyed_satoshi_seconds": 0,
                    "transactions": [
                        {
                            "id": "59520616C64D5ED275B7FC6B7160D292E1F8BC2BE7A3D0AECF9652943819161B"
                        }
                    ]
                },
                {
                    "id": "00000000000000001F3B06A9864D9B16BABDFDE396AAD681B0D8C55AC4E55378",
                    "height": 326052,
                    "version": 2,
                    "merkel_root": "906F3AC80B160A5B395ED5C95B0FC9FC5CBF011146BEE122587E529D4BEA2246",
                    "time": 1413739606,
                    "nonce": 3884717883,
                    "chainwork": "00000000000000000000000000000000000000000000000000000002375A1E1C5ABBE7CD3B10",
                    "bits": "404711795",
                    "prev_block_id": "0000000000000000172E08459775E2763B4F5D361BFABDB7528B65E6B430B33E",
                    "next_block_id": "00000000000000000223F20FB87D7BC1F0E1AE60C8CC137C9535092EC4E53C19",
                    "confirmations": 2,
                    "is_main_chain": 1,
                    "tx_count": 146,
                    "coinbase": 2500000000,
                    "coinbase_fiat_now": "9,663.87",
                    "coinbase_disp": "25.00000000",
                    "input_value": 70793233071,
                    "input_value_fiat_now": "273,654.78",
                    "input_value_disp": "707.93233071",
                    "output_value": 73293233071,
                    "output_value_fiat_now": "283,318.66",
                    "output_value_disp": "732.93233071",
                    "fees": 7015913,
                    "fees_fiat_now": "27.12",
                    "fees_disp": "0.07015913",
                    "total_satoshies": 1340131181308872,
                    "total_seconds": 182733101,
                    "satoshi_seconds": 9223372036854775807,
                    "total_satoshi_seconds": 9223372036854775807,
                    "destroyed_satoshi_seconds": 1039527168481799,
                    "transactions": [
                        {
                            "id": "4F4A8F2290979826F2FD985EE2AF28B0C4D7A7B48C88FBAA5C28018624D0C19E"
                        },
                        ...<SNIP_TXN_OBJECTS>
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
