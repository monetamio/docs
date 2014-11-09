## Transaction Object

    GET <API_ENDPOINT>/v0/<CHAIN>/transaction/id/<TXN_HASH>

Transaction objects are returned by multiple methods, in varying levels of detail. The API will give you
less detail by default, and you can add URL params to increase the detail level.
In general:
* No url param will show the minimal information (usually just the id of the Transaction)
* ?showtxn=1 will show Transaction information
* ?showtxnio=1 will show Tranaction information and the Inputs and Outputs for the Transaction

Be warned that just requesting ?showtxnio=1 every time will considerably slow down the response time
of the API and increase the amount of data you'll receive in each API call. Only turn these options on
when you're sure you need the additional information.

Note Transaction return by Address functions have a special set of extra info to that reflects the
relationship between the Transaction and the Address. (see below for the extra elements)

### Examples
* [BTC Block with minimal Transaction information](https://api.blockstrap.com/v0/btc/block/latest?prettyprint=1)
* [BTC Transaction with medium information](https://api.blockstrap.com/v0/btc/transaction/id/ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764?prettyprint=1)
* [BTC Transaction with maximum information](https://api.blockstrap.com/v0/btc/transaction/id/ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764?showtxnio=1&prettyprint=1)


Example Output
Minimum Information
    {"id"="94C0BBEA9CE28A5631642252E0EEAE36F9DC91E62F87310B064CEC4BFCE9DCBA"}

Medium Information
    {
        "id": "ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764",
        "size": 817,
        "version": 1,
        "time": 0,
        "is_coinbase": 0,
        "fees": 0,
        "fees_fiat_now": 0,
        "fees_disp": "0.00000000",
        "block_id": "00000000000000001E1B2CC3C89B90C98DC0C59BC839B38DB6DBEDD5724752A8",
        "block_height": 326035,
        "block_time": 1413727866,
        "confirmations": 0,
        "input_count": 5,
        "input_value": 201042953,
        "input_value_fiat_now": "777.20",
        "input_value_disp": "2.01042953",
        "output_count": 2,
        "output_value": 201042953,
        "output_value_fiat_now": 777.2,
        "output_value_disp": "2.01042953",
    }
Maximum Information
    {
        "id": "ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764",
        "size": 817,
        "version": 1,
        "time": 0,
        "is_coinbase": 0,
        "fees": 0,
        "fees_fiat_now": 0,
        "fees_disp": "0.00000000",
        "block_id": "00000000000000001E1B2CC3C89B90C98DC0C59BC839B38DB6DBEDD5724752A8",
        "block_height": 326035,
        "block_time": 1413727866,
        "confirmations": 0,
        "input_count": 5,
        "input_value": 201042953,
        "input_value_fiat_now": "777.20",
        "input_value_disp": "2.01042953",
        "output_count": 2,
        "output_value": 201042953,
        "output_value_fiat_now": 777.2,
        "output_value_disp": "2.01042953",

        "inputs": [
            {
                "value": 71817918,
                "value_fiat_now": 277.64,
                "value_disp": "0.71817918",
                "tx_id": "0A216FA9DD2EACB1E74E533E648DFC1B4ECADFF2726C922547DE2600A3725F77",
                "tx_pos": 2373,
                "address": "1A9oR5ngk5iapd4zs7ekYetLPNgDdhhpQs"
            },
            <SNIP_TXN_INPUTS>
        ],
        "outputs": [
            {
                "pos": 0,
                "script_pub_key": "76A91437F777D8005840C3FF3AF318959D26F134A0547688AC",
                "pubkey_hash": "37F777D8005840C3FF3AF318959D26F134A05476",
                "address": "166vcwRxrvckPcsa1gXjZ1EPw9uaz3qJsX",
                "value": 200000000,
                "value_fiat_now": 773.17,
                "value_disp": "2.00000000",
                "spending_tx_id": null,
                "spending_tx_pos": 0,
                "is_spent": 0
            },
            <SNIP_TXN_OUTPUTS>
        ]
    }

### Elements
* `id`: String (hex) The id (or hash) of the Transaction
* `size`: Integer, Size (in bytes) of the raw Transaction data
* `version`: Integer, The encoding version used to encode the Transaction prior to broadcast to the network
* `time`: Integer (Unix epoch) The time the Transaction claims to have been broadcast to the network
* `is_coinbase`: Integer, Is this Transaction a coinbase reward Transaction 0=No 1=Yes
* `fees`: Integer, The fees paid to the miner from this Transaction (in Satoshies)
* `fees_fiat_now`: String, A representation of the *Approximate* value of the `fees` payment in the specified fiat currency
* `fees_disp`: String, A 'display friendly' representation of the `fees` (in full coins)
* `block_id`: String (hex)|NULL,The id (or hash) of the first Block to confirm this Transaction NULL=Not in a Block yet
* `block_height`: Integer|NULL, The height of the first Block to confirm this Transaction NULL=Not in a Block yet
* `block_time`: Integer (Unix epoch) The time of the first Block to confirm this Transaction. 0=Not in a Block yet
* `confirmations`: Integer, The number of confirmations for this Transaction. 0=Unconfirmed (Not in a block yet)
* `input_count`: Integer, The number of `input`s 'redeemed' by this Transaction
* `input_value`: Integer, The total value of the `input`s (in satoshies)
* `input_value_fiat_now`: String, A representation of the *Approximate* value of the `input_value` payment in the specified fiat currency
* `input_value_disp`: String, A 'display friendly' representation of the `input_value` (in full coins)
* `output_count`: Integer, The number of `output`s 'created' by this Transaction
* `output_value`: Integer, The total value of the `output`s (in satoshies)
* `output_value_fiat_now`: String, A representation of the *Approximate* value of the `output_value` payment in the specified fiat currency
* `output_value_disp`: String, A 'display friendly' representation of the `output_value` (in full coins)
* `inputs`: *Array* of Inputs to the Transaction
    * `value`: Integer, The value of the `input` (in satoshies)
    * `value_fiat_now`: String, A representation of the *Approximate* value of the `value` payment in the specified fiat currency
    * `value_disp`: String, A 'display friendly' representation of the `value` (in full coins)
    * `tx_id`: String (hex) The id (of hash) of the source Transaction being spent
    * `tx_pos`: Integer, The position of the output in the source Transaction being spent
    * `address`: String (enc58), the `Address` from where the `input` 'comes from'
* `outputs`: *Array* of outputs from the Transaction
    * `pos`: Integer, The position of the output in the Transaction
    * `script_pub_key`: String (hex), The 'spending script'
    * `pubkey_hash`: String (hex), the hash of the Public Key of the recipient of the `value`
    * `address`: String (enc58), The Address the `value` is 'paid into'
    * `value`: Integer, The value of the `output` (in satoshies)
    * `value_fiat_now`: String, A representation of the *Approximate* value of the `value` payment in the specified fiat currency 
    * `value_disp`: String, A 'display friendly' representation of the `value` (in full coins)
    * `spending_tx_id`: String, The id (or hash) of the Transaction that spends this `output`. NULL indicates the `output` has not been spent
    * `spending_tx_pos`: Integer, The position of this output, as the input in the spending Transaction
    * `is_spent`: Integer, Has the output been spent by another Transaction 0=no 1=yes

### Special Address elements
When a Transaction object is returned as part of an Address method the following extra elements are provided.
* `tx_address_tx_pos`: Integer, The position of the output in the Transaction that is affecting the Address
* `tx_address_value`: Integer, the absolute value (in satoshies) of the value affecting the Address
* `tx_address_value_fiat_now`:String, A representation of the *Approximate* value of the `tx_address_value` payment in the specified fiat currency ,
* `tx_address_value_disp`: String, A 'display friendly' representation of the `tx_address_value` (in full coins)
* `tx_address_direction`: String ('input' or 'output'), Shows the direction of movement of the `tx_address_value` relative to the address.
* `tx_address_script_pub_key`: String (hex), the pub key script.
* `tx_address_ledger`: Integer, How the `tx_address_value` affects the balance of the Address. Positive number increases the balance, negative number decreases the balance
* `tx_address_ledger_fiat_now`: String, A representation of the *Approximate* value of how the `tx_address_value` payment in the specified fiat currency has affected the balance of the Address
* `tx_address_ledger_disp`: String, A 'display friendly' representation of the how the `tx_address_value` (in full coins) has affected the balance of the Address

#### Also see
* [Transaction details and Pagination](../../notes/detail-and-pagination/)
* [Values and Currency](../../notes/values-and-currencies/) How we handle values and currencies
* [Request object](../../notes/requestobject/)
* [Supported Chains](../../notes/chains/)

1. [Return to API](../../../)
1. [Transaction](../transaction-id/)
1. [Transaction Relay](../transaction-relay/)
1. [Transaction Decode](../transaction-decode/)
1. [Table of Contents](../../../../../)