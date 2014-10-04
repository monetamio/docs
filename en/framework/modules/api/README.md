API Module <a name="docs_home"></a>
===================================

### API Functions & Variables

The API Module features the following functions:

* `$.fn.blockstrap.api.address`(hash, currency, callback)
* `$.fn.blockstrap.api.addresses`(hashes, currency, callback)
* `$.fn.blockstrap.api.balance`(hash, currency, callback)
* `$.fn.blockstrap.api.block`(height, currency, callback)
* `$.fn.blockstrap.api.request`(url, callback, type, data)
* `$.fn.blockstrap.api.relay`(hash, currency, callback)
* `$.fn.blockstrap.api.transaction`(txid, currency, callback)
* `$.fn.blockstrap.api.transactions`(address, currency, callback)
* `$.fn.blockstrap.api.unspents`(address, currency, callback, confirms)
* [`$.fn.blockstrap.api.url`(action, key, currency)](#api_url)

--------------------------------------------------------------------------------

#### `api.address`(hash, currency, callback)

This function uses the selected API to get information pertaining to an address.

The information it is able to map (with the corresponding defaults) includes:

```
{
    address: 'N/A',
    hash: 'N/A',
    tx_count: 0,
    currency: currency,
    received: 0,
    balance: 0
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.address('1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    address: "1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk",
    balance: 0,
    currency: "btc",
    hash: "0030ececbad05ffcdff89f3f26e38ca3d735a8de",
    received: 5000000000,
    tx_count: 2
}
```

--------------------------------------------------------------------------------

#### `api.addresses`(hashes, currency, callback)

This function uses the selected API to get information pertaining to multiple addresses.

The information it is able to map (with the corresponding defaults) includes:

```
{
    address: 'N/A',
    hash: 'N/A',
    tx_count: 0,
    currency: currency,
    received: 0,
    balance: 0
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.addresses(
    ['1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk, 12higDjoCCNXSA95xZMWUdPvXNmkAduhWv'], 
    'btc', function(results)
    {
        // Your callback
        console.log(results)
    }
);
```

Which should provide the following results:

```
{
    address: "1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk",
    balance: 0,
    currency: "btc",
    hash: "0030ececbad05ffcdff89f3f26e38ca3d735a8de",
    received: 5000000000,
    tx_count: 2
},
{
    address: "12higDjoCCNXSA95xZMWUdPvXNmkAduhWv",
    balance: 0,
    currency: "btc",
    hash: "12ab8dc588ca9d5787dde7eb29569da63c3a238c",
    received: 7762439255612,
    tx_count: 75
}
```

--------------------------------------------------------------------------------

#### `api.balance`(hash, currency, callback)

This function uses the selected API to get the balance of an address.

The information it is able to map (with the corresponding defaults) includes:

```
{
    NOT MAPPED YET
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.balance('1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    0
}
```

--------------------------------------------------------------------------------

#### `api.block`(height, currency, callback)

This function uses the selected API to get information pertaining to a block.

The information it is able to map (with the corresponding defaults) includes:

```
{
    currency: currency,
    height: 'N/A',
    hash: 'N/A',
    prev: 'N/A',
    tx_count: 0,
    time: 0
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.block('15968', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    currency: "btc",
    hash: "00000000201016a83272835468d457d15965d57f57c0da5944dc94ea9389f360",
    height: 15968,
    prev: "00000000abae6b44fa98526e865a08820f4528eda46cad40445de3690c502ae8",
    time: 1243609567,
    tx_count: 2
}
```

--------------------------------------------------------------------------------

#### `api.request`(url, callback)

This function is used internally by all other functions within this class to route requests and should not be directly used.

--------------------------------------------------------------------------------

#### `api.relay`(hash, currency, callback)

This function uses the selected API to relay a raw transaction.

The information it is able to map (with the corresponding defaults) includes:

```
{
    currency: currency,
    txid: 'N/A'
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.relay('__RAW_TX__', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    currency: "btc",
    txid: "00000000201016a83272835468d457d15965d57f57c0da5944dc94ea9389f360"
}
```

--------------------------------------------------------------------------------

#### `api.transaction`(txid, currency, callback)

This function uses the selected API to get information pertaining to a transaction.

The information it is able to map (with the corresponding defaults) includes:

```
{
    url: '#',
    currency: currency,
    txid: 'N/A',
    size: 'N/A',
    block: 'N/A',
    time: 0,
    input: 0,
    output: 0,
    fees: 0
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.transaction(
    '06032a172f88ba823785f87341eab26ee7a2eb2de9d2f105220d6580e3affc16', 
    'btc', function(results)
    {
        // Your callback
        console.log(results)
    }
);
```

Which should provide the following results:

```
{
    block: 15968,
    currency: "btc",
    fees: 0,
    input: 300000000000,
    output: 300000000000,
    size: 6883,
    time: 1243609567,
    txid: "06032a172f88ba823785f87341eab26ee7a2eb2de9d2f105220d6580e3affc16",
    url: "#transaction?txid=06032a172f88ba823785f87341eab26ee7a2eb2de9d2f105220d6580e3affc16"
}
```

--------------------------------------------------------------------------------

#### `api.transactions`(address, currency, callback)

This function uses the selected API to get information pertaining to all the transactions of a single address.

The information it is able to map (with the corresponding defaults) includes:

```
{
    url: '#',
    currency: currency,
    txid: 'N/A',
    size: 'N/A',
    block: 'N/A',
    time: 0,
    input: 0,
    output: 0,
    fees: 0
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.transactions('1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    block: 15968,
    currency: "btc",
    fees: 0,
    input: 300000000000,
    output: 300000000000,
    size: 6883,
    time: 1243609567,
    txid: "06032a172f88ba823785f87341eab26ee7a2eb2de9d2f105220d6580e3affc16",
    url: "#transaction?txid=06032a172f88ba823785f87341eab26ee7a2eb2de9d2f105220d6580e3affc16"
},
    block: 15169,
    currency: "btc",
    fees: 0,
    input: 0,
    output: 5000000000,
    size: 135,
    time: 1242853427,
    txid: "7f065b4a2a7f5393a5d1b74e8f340ac961d21bb7e8b77a59c9db580eeaf78d03",
    url: "#transaction?txid=7f065b4a2a7f5393a5d1b74e8f340ac961d21bb7e8b77a59c9db580eeaf78d03"
}
```

--------------------------------------------------------------------------------

#### `api.unspents`(address, currency, callback, confirms)

This function uses the selected API to check an address for unspent inputs.

The information it is able to map (with the corresponding defaults) includes:

```
{
    txid: 'N/A',
    index: 0,
    value: 0,
    script: 'N/A'
}
```

Example usage of this function could look like:

```
var api = $.fn.blockstrap.prototype.api;
api.unspents('1121cQLqCsDsLPAkJW5ddTCREZ7Bp4ufrk', 'btc', function(results)
{
    // Your callback
    console.log(results)
});
```

Which should provide the following results:

```
{
    TO BE TESTED
}
```

--------------------------------------------------------------------------------

#### `api.url`(action, key, currency) <a name="api_url" class="icon-up" href="#docs_home">- back to top</a>

This function is used internally by all other functions within this class to help construct URLs prior to API requests and should not be directly used.

--------------------------------------------------------------------------------

#### API Mapping

Blockstrap does not lock you in to a specific API provider. We provide functionality that allows you to map each and every API call we make to a specific API end-point of your choosing. For example, if you wanted to map our wallet to the [Hello Block](http://helloblock.io) API you would supply the following map:

```
var map = {
    ends: {
        btc: 'https://mainnet.helloblock.io/v1/'
    },
    to: {
        address: 'addresses/',
        addresses: 'addresses?addresses=',
        transaction: 'transactions/',
        transactions: 'addresses/$call/transactions?limit=100',
        block: 'blocks/'
    },
    from: {
        address: {
            key: 'address',
            address: 'address',
            hash: 'hash160',
            tx_count: 'confirmedTxsCount',
            received: 'confirmedReceivedValue',
            balance: 'confirmedBalance'
        },
        addresses: {
            key: 'addresses',
            address: 'address',
            hash: 'hash160',
            tx_count: 'confirmedTxsCount',
            received: 'confirmedReceivedValue',
            balance: 'confirmedBalance'
        },
        transaction: {
            key: 'transaction',
            txid: 'txHash',
            size: 'size',
            block: 'blockHeight',
            time: 'blockTime',
            input: 'totalInputsValue',
            output: 'totalOutputsValue',
            fees: 'fees'
        },
        transactions: {
            key: 'transactions',
            txid: 'txHash',
            size: 'size',
            block: 'blockHeight',
            time: 'blockTime',
            input: 'totalInputsValue',
            output: 'totalOutputsValue',
            fees: 'fees'
        },
        block: {
            key: 'block',
            height: 'blockHeight',
            hash: 'blockHash',
            prev: 'prevBlockHash',
            tx_count: 'txsCount',
            time: 'blockTime'
        }
    }
}
```


---

1. Related Articles
2. [Back to Modules](../../modules/)
3. [Accounts](../accounts/)
4. [API](../api/)
5. [Buttons](../buttons/)
6. [Contacts](../contacts/)
7. [Currencies](../currencies/)
8. [Data](../data/)
9. [Filters](../filters/)
10. [Forms](../forms/)
11. [Security](../security/)
12. [Styles](../styles/)
13. [Templates](../templates/)
14. [Table of Contents](../../../)
