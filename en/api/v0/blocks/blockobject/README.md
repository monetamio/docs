## Block Object


Represents a Block in the blockchain.

Example Object [taken from here](https://api.blockstrap.com/v0/btc/block/id/000000000000000015DB0BCB1A6651E9E4910B598C3B027941EACF9764172211?prettyprint=1)
    {
        "id": "000000000000000015DB0BCB1A6651E9E4910B598C3B027941EACF9764172211",
        "size": "230782",
        "height": 326027,
        "version": 2,
        "merkel_root": "433C2AA35CEE46817162F1F047FE66BCF7E237CECA231F99367C15DAB1EA6D43",
        "time": 1413722064,
        "time_display": "2014-10-19T12:34:24+00:00",
        "nonce": 1077027239,
        "chainwork": "00000000000000000000000000000000000000000000000000000002368E5F8D5CCF9530B160",
        "bits": "404711795",
        "prev_block_id": "00000000000000001D2B7DEF06CB2C01996FE96FD889666960026A3014BB10A6",
        "next_block_id": "",
        "confirmations": 0,
        "is_main_chain": 1,
        "tx_count": 409,
        "coinbase": 2500000000,
        "coinbase_fiat_now": "9,602.53",
        "coinbase_disp": "25.00000000",
        "input_value": 177433423306,
        "input_value_fiat_now": "681,524.08",
        "input_value_disp": "1,774.33423306",
        "output_value": 179933423306,
        "output_value_fiat_now": "691,126.61",
        "output_value_disp": "1,799.33423306",
        "fees": 6338279,
        "fees_fiat_now": "24.35",
        "fees_disp": "0.06338279",
        "total_satoshies": 1340068681308872,
        "total_seconds": 182715559,
        "satoshi_seconds": 9223372036854775807,
        "total_satoshi_seconds": 9223372036854775807,
        "destroyed_satoshi_seconds": 24052291742158635,
        "transactions": [
            {
                "id": "642599B639656939468324B64E327D3EDFBB906432BE622E0FF37DFA08C152D8"
            },
            {
                "id": "3B5A826B56A245E7AB1277B3993B8BB7ECEB5B0C7677855234AB4BB9FE7710BC"
            },
            {
                "id": "95B3B825C5483C7D1C3957AD16C6BAE5DFC1ECDC10F49B24DB69F38C3C299A02"
            },
            ...<SNIP_ARRAY_OF_TXNS>
        ]
    }


## Elements
* `id`: String (hex), The id (or 'hash') of the Block
* `size` : Integer, The size of the Block in bytes
* `height` : Integer, The height of the Block in the Blockchain
* `version`: Integer, The encoding version used by the network for this Block
* `merkel_root`: String (hex), The merkel root used to verify the integrity of the Block data
* `time`: Integer (Unix epoch), The time the Block claims to have been broadcast to the network
* `time_display`: String (ISO 8601 date), The time the Block claims to have been broadcast to the network
* `nonce`: Integer, The nonce added to the Block data to create the magic hash value
* `chainwork`: String (hex), the amount of work done by the chain so far
* `bits`: String (number) Don't know what this is.
* `prev_block_id`: String (hex), the id (or hash) of the previous Block in the blockchain
* `next_block_id`: String (hex), the id (or hash) of the next Block. An empty string shows that this Block is at the top of the blockchain
* `confirmations`: Integer, The number of blocks after this one in the blockchain
* `is_main_chain`: Integer, Is this block in the Main Chain 1=yes 0=no
* `tx_count`: Integer, The number of Transactions in this Block
* `coinbase`: Integer, The reward (excluding fees) paid to the miner for mining this Block (in satoshies)
* `coinbase_fiat_now`: String. A representation of the *Approximate* value of the coinbase payment in the specified fiat currency
* `coinbase_disp`: String, A 'display friendly' representation of the coinbase value (in full coins)
* `input_value`: Integer, A summation of all the inputs to all the Transactions in the Block (in satoshies)
* `input_value_fiat_now`: String. A representation of the *Approximate* value of the `input_value` payment in the specified fiat currency
* `input_value_disp`: String, A 'display friendly' representation of the `input_value` value (in full coins)
* `output_value`: Integer, A summation of all the outputs to all the Transactions in the Block (in satoshies)
* `output_value_fiat_now`: String. A representation of the *Approximate* value of the `output_value` payment in the specified fiat currency
* `output_value_disp`: String, A 'display friendly' representation of the `output_value` value (in full coins)
* `fees`: Integer, A summation of all the fees from all the Transactions in the Block (in satoshies). Excludes the `coinbase` reward
* `fees_fiat_now`: String. A representation of the *Approximate* value of the `fees` payment in the specified fiat currency
* `fees_disp`: String, A 'display friendly' representation of the `fees` value (in full coins)
* `total_satoshies`: Integer, the number of satoshies in existence
* `total_seconds`: Integer, the age of the network in seconds
* `satoshi_seconds`: Integer, The number of satoshies multiplied by their age in this Block
* `total_satoshi_seconds`: Integer, The number of satoshies multiplied by their age in existence ,
* `destroyed_satoshi_seconds`: Integer, The number of `satoshi_seconds` 'used up' in this Block,
* `transactions`: *Array* of Transactions. Based on the query showtxn=1 or showtxnio=1 parameters you get different levels of [Transaction detail](../../notes/detail-and-pagination/)









### Examples
* [BTC Latest block](https://api.blockstrap.com/v0/btc/block/latest?prettyprint=1)
* [DOGE Latest 2 blocks](https://api.blockstrap.com/v0/doge/block/latest/2?prettyprint=1)
* [LTC Latest 5 blocks](https://api.blockstrap.com/v0/ltc/block/latest/5?prettyprint=1)

#### Also see
* [Transaction details and Pagination](../../notes/detail-and-pagination/)
* [Values and Currency](../../notes/values-and-currencies/) How we handle values and currencies
* [Supported Chains](../../notes/chains/)
* [What are Satoshi-seconds](http://bitcoin.stackexchange.com/a/847)


---

1. [Return to API](../../../)
1. [Return to Blocks](../)
1. [block](../block-id/)
1. [blockHeight](../block-height/)
1. [blockLatest](../block-latest/)
1. [Table of Contents](../../../../)
