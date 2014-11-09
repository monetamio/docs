## Address object

Represents an Address in the blockchain.

Example Object (from [here](https://api.blockstrap.com/v0/btc/address/id/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1))
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
        "balance_confirmations_required": 0
    }

### Elements
* `address_hash160`: String (hex), The hash160 of the Address' public key
* `address`: String (base58), The 'id' of the Address
* `outputs_count_confirmed`: Integer, The total number of outputs from this 'Address' that have been confirmed
* `outputs_value_confirmed`: Integer, The total value (in satoshies) of outputs from this Address that have been confirmed
* `inputs_count_confirmed`: Integer, The total number of inputs into this Address that have been confirmed
* `inputs_value_confirmed`: Integer, The total value (in satoshies) of inputs into this Address that have been confirmed
* `outputs_count_unconfirmed`: Integer, The total number of outputs from this 'Address' that are unconfirmed (i.e. not in a Block yet)
* `outputs_value_unconfirmed`: Integer, The total value (in satoshies) of outputs from this Address that are unconfirmed (i.e. not in a Block yet)
* `inputs_count_unconfirmed`: Integer, The total number of inputs into this Address that are unconfirmed (i.e. not in a Block yet)
* `inputs_value_unconfirmed`: Integer, The total value (in satoshies) of inputs into this Address that are unconfirmed (i.e. not in a Block yet)
* `outputs_count_total`: Integer, The total number of all outputs from this address (confirmed + unconfirmed)
* `inputs_count_total`: Integer, The total number of all inputs from this address (confirmed + unconfirmed)
* `inout_count_total`: Integer, The total number of both inputs and outputs to and from this Address
* `outputs_value_total`: Integer, The total value (in satoshies) of all outputs from this address (confirmed and unconfirmed)
* `outputs_value_total_fiat_now`: String. A representation of the *Approximate* value of the `outputs_value_total` in the specified fiat currency
* `outputs_value_total_disp`: String, A 'display friendly' representation of the `outputs_value_total` value (in full coins)
* `inputs_value_total`: Integer, The total value (in satoshies) of all inputs to this address (confirmed and unconfirmed)
* `inputs_value_total_fiat_now`: String. A representation of the *Approximate* value of the `inputs_value_total` in the specified fiat currency
* `inputs_value_total_disp`: String, A 'display friendly' representation of the `inputs_value_total` value (in full coins)
* `inout_value_total`: Integer, The total value (in satoshies) of all inputs and outputs to and form this address (confirmed and unconfirmed)
* `inout_value_total_fiat_now`: String. A representation of the *Approximate* value of the `inout_value_total` in the specified fiat currency
* `inout_value_total_disp`: String, A 'display friendly' representation of the `inout_value_total` value (in full coins)
* `balance`: Integer, The balance (in satoshies) of value in the Address
* `balance_fiat_now`: String. A representation of the *Approximate* value of the Address' balance in the specified fiat currency
* `balance_disp`: A 'display friendly' representation of the Address' balance (in full coins)
* `balance_confirmations_required`: Integer, The number of confirmations required before a input/output is included in these figures

#### Also see
* [Values and Currency](../../notes/values-and-currencies/) How we handle values and currencies
* [Request object](../../notes/requestobject/)
* [Supported Chains](../../notes/chains/)

1. [Return to API](../../../)
1. [Return to Addresses](../)
1. [Address object](../addressobject/)
1. [Address](../address-id/)
1. [Addresses](../address-ids/)
1. [Address Transactions](../address-transactions/)
1. [Address Unspents](../address-unspents/)
1. [Address Hash 160 To Address](../address-from-hash160/)
