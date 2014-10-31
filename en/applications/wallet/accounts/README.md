## Blockstrap Accounts <a name="docs_home"></a>

Accounts can be accessed from any application that includes the [$.fn.blockstrap.accounts](../../../framework/modules/accounts/) module.

By utilizing this module, the wallet is able to create and manage accounts.

When first creating a new ___Bitcoin___ account called ___My Wallet___, information such as the following is added to [localStorage](http://en.wikipedia.org/wiki/Web_storage):

<!--pre-javascript-->
```
{
    id: "my_wallet",
    name: "My Wallet",
    currency: {
        type: "Bitcoin",
        code: "btc"
    },
    keys: ["wallet_currency", "wallet_name", "wallet_password"],
    address: "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
    tx_count: 0,
    balance: 0,
    ts: 1411946986223,
    password: "39e7a72e09cd4191a17a099caf8a010e02210892dca234f7e15d0db368591b528c09d17605dca4d6a200c83005a64b0e30c36dcee6bdae326d941794866404f1"
}
```
---

Please note that the `id` field is auto-generated from the `name`.

The `currency` selection is a parameter of the function and should only allow those supported via configuration.

The `keys` field is an array of the components used to generate the key-pair. A salted hash of each of these and their hidden values are added to the hash of the next. We store what was used so we know what to ask for when needed.

We only store the public key, as seen in the `address` field.

The `ts` field represents the time the account was created (and is later updated).

We store a salted hash of the `password` as this allows us to verify against it for simple UX functionality such as removing or editing the account on the device.

At the point of creation and (or) depending on `cache` [configuration](../../../framework/core/configuration/) settings, the [$.fn.blockstrap.api](../../../framework/modules/api/) module will fetch additional informating pertaining to the balance and transaction count.

If the new transaction account is higher than the currently saved count, it will then make another API call and collect and store additional transaction information, such as:

<!--pre-javascript-->
```
{
    "id": "my_wallet",
    "currency": {
        "type": "Bitcoin",
        "code": "btc"
    },
    "name": "My First Wallet",
    "password": "39e7a72e09cd4191a17a099caf8a010e02210892dca234f7e15d0db368591b528c09d17605dca4d6a200c83005a64b0e30c36dcee6bdae326d941794866404f1",
    "keys": ["wallet_currency", "wallet_name", "wallet_password"],
    "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
    "tx_count": 7,
    "balance": 260000,
    "ts": 1411946986223,
    "txs": {
        "txid_51bda8d2268beae1b5e8d60850df9d6ef3ff3d012413e81f48d50cc34a98deee": {
            "currency": "btc",
            "txid": "51bda8d2268beae1b5e8d60850df9d6ef3ff3d012413e81f48d50cc34a98deee",
            "size": 226,
            "block": 322972,
            "time": 1411946137,
            "input": 2125000,
            "output": 2115000,
            "inputs": [{
                "prevTxHash": "d366831514eff85509623fd9494c217de93b1a11a41f3a7bfc9e1fd45947e351",
                "prevTxoutIndex": 1,
                "prevTxoutType": "pubkeyhash",
                "value": 2125000,
                "address": "18HsNssHqNiYFYj8EvBxBW34dNEMyGkfZ9",
                "hash160": "4ff996b0d0ed7490a393687059a282493d88000c",
                "scriptSig": "483045022100eefd144eda718edbe98202348debd5a37d420bd57e4799c15e707b9faf3d74d2022039da4784cf94ce4d51f306b415890cf9115242f225b6ba8a5bf543adb0900e40012102be05b8c4c240a754a8b270721c00032e77026670233aed7214d5eb71e1b622dc",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 1915000,
                "scriptPubKey": "76a914b7d3b96435d83cfc09feb29dfa3e469675fbfa7588ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 b7d3b96435d83cfc09feb29dfa3e469675fbfa75 OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1HkzHxdxfVGVL7CbfiCB194tb3AaB43Wjw",
                "hash160": "b7d3b96435d83cfc09feb29dfa3e469675fbfa75",
                "type": "pubkeyhash",
                "spent": true,
                "nextTxHash": "b5518fed52c7d7887483a87bc82948677a77a0714f3375886069b46c09e81bcc",
                "nextTxinIndex": 0
            }, {
                "index": 1,
                "value": 200000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 200000,
            "fees": 10000
        },
        "txid_2f231b7f41cee3f40b4a4de30d52b9ef28028529fd10986f2666cc8641dbbfab": {
            "currency": "btc",
            "txid": "2f231b7f41cee3f40b4a4de30d52b9ef28028529fd10986f2666cc8641dbbfab",
            "size": 373,
            "block": 322972,
            "time": 1411946137,
            "input": 1072901,
            "output": 1062901,
            "inputs": [{
                "prevTxHash": "74170374b0d737dbc048074251808f62b49d5e0bf75760003df532d09904fe7e",
                "prevTxoutIndex": 1,
                "prevTxoutType": "pubkeyhash",
                "value": 982901,
                "address": "145xRsSe6wkFCyqQqJ4YAQoMxDSWS3GJiR",
                "hash160": "21d84f91ecfc66595f50a01fa900e96bfeffee3a",
                "scriptSig": "473044022064cc23822325361d078ba251856450c8590023a77caec7179d23abe373d16bb60220730952a2258961a8af76c26c8833e9ebc26e27ca58edb3def24cc7515fbbd65101210369e30f54ff0e4021f9380e3b5abede065662a0bbd750b311405b852ca9636e06",
                "sequence": 4294967295
            }, {
                "prevTxHash": "f151757c31ffbbdf0d87d32780f41646aa51d27be8f813be9276e9eaccc97b38",
                "prevTxoutIndex": 0,
                "prevTxoutType": "pubkeyhash",
                "value": 90000,
                "address": "13uXA8zfLjsnrg69f6FcHVRfwBGobYU3bc",
                "hash160": "1fdf0e4b2c97c9afa9ebfccb6f0406e55bbe5d66",
                "scriptSig": "483045022100ac7286f7d0e532c516e213161560fc2b94c815b5c4754a75995636f75a6b806802205cb6cdcab1000e0d3d228ad186b38b64ac70c437ce475b4c28f3d9f033ed0441012103a6c9d1e4a0aea368046b70c9dd5d8769b7d8f00df88f5960034c44a5a16ba3aa",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }, {
                "index": 1,
                "value": 1052901,
                "scriptPubKey": "76a9143bc52c869a863eb0add57c24c14cae5f7679167e88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 3bc52c869a863eb0add57c24c14cae5f7679167e OP_EQUALVERIFY OP_CHECKSIG",
                "address": "16T35Cm3mSjiVidQSD4CgCNQgTSJGiJLFk",
                "hash160": "3bc52c869a863eb0add57c24c14cae5f7679167e",
                "type": "pubkeyhash",
                "spent": true,
                "nextTxHash": "baff4c9adb96029216b0d88259491b502d9ec63bff23a70feaa99aa28a5487ff",
                "nextTxinIndex": 0
            }],
            "value": 10000,
            "fees": 10000
        },
        "txid_baff4c9adb96029216b0d88259491b502d9ec63bff23a70feaa99aa28a5487ff": {
            "currency": "btc",
            "txid": "baff4c9adb96029216b0d88259491b502d9ec63bff23a70feaa99aa28a5487ff",
            "size": 226,
            "block": 322976,
            "time": 1411947003,
            "input": 1052901,
            "output": 1042901,
            "inputs": [{
                "prevTxHash": "2f231b7f41cee3f40b4a4de30d52b9ef28028529fd10986f2666cc8641dbbfab",
                "prevTxoutIndex": 1,
                "prevTxoutType": "pubkeyhash",
                "value": 1052901,
                "address": "16T35Cm3mSjiVidQSD4CgCNQgTSJGiJLFk",
                "hash160": "3bc52c869a863eb0add57c24c14cae5f7679167e",
                "scriptSig": "483045022100e13f38dd98d6f7954ab21aee2ccad96788051a881eb9bdb1a03b14641601f44f0220283ce43ed04239e5c590c9aaec71f7c5483d754b925962026aaee4b346bfc8ca012102b4c0d92712a9ed051faeb710bc71e330507f25633702e446237df58713c27557",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 1032901,
                "scriptPubKey": "76a9145c3519b0ecd82d4410ddc370c55cf950cbd12e7e88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 5c3519b0ecd82d4410ddc370c55cf950cbd12e7e OP_EQUALVERIFY OP_CHECKSIG",
                "address": "19QYn8JDj8BZDWEx9RWFJhiLXoGUnpedzZ",
                "hash160": "5c3519b0ecd82d4410ddc370c55cf950cbd12e7e",
                "type": "pubkeyhash",
                "spent": true,
                "nextTxHash": "825f149f4e786cdcaa5188d2d4c6a048541f0d1a5ac6f64dbf4955a5dee53449",
                "nextTxinIndex": 0
            }, {
                "index": 1,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 10000,
            "fees": 10000
        },
        "txid_b5518fed52c7d7887483a87bc82948677a77a0714f3375886069b46c09e81bcc": {
            "currency": "btc",
            "txid": "b5518fed52c7d7887483a87bc82948677a77a0714f3375886069b46c09e81bcc",
            "size": 225,
            "block": 322976,
            "time": 1411947003,
            "input": 1915000,
            "output": 1905000,
            "inputs": [{
                "prevTxHash": "51bda8d2268beae1b5e8d60850df9d6ef3ff3d012413e81f48d50cc34a98deee",
                "prevTxoutIndex": 0,
                "prevTxoutType": "pubkeyhash",
                "value": 1915000,
                "address": "1HkzHxdxfVGVL7CbfiCB194tb3AaB43Wjw",
                "hash160": "b7d3b96435d83cfc09feb29dfa3e469675fbfa75",
                "scriptSig": "473044022006dcf71964e201e2c254428ea4f9d6ac7a5ed2d4cf18986290f6ba43649d726d02205d9e865ccec21942d1d789fcee1b3aa66258fc2d1320ac4a2acbae30257a86a301210288b154e1a9af7aa4f26ac4b1aca197525cc6f47ddacc91ba40ee15a4936b3e25",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }, {
                "index": 1,
                "value": 1895000,
                "scriptPubKey": "76a914013fd878b13a9cd4df620cc747ba121b83098caf88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 013fd878b13a9cd4df620cc747ba121b83098caf OP_EQUALVERIFY OP_CHECKSIG",
                "address": "17cAGA2rcF7AnCWoTUeqGqLJAHJ8kFApW",
                "hash160": "013fd878b13a9cd4df620cc747ba121b83098caf",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 10000,
            "fees": 10000
        },
        "txid_20456b0d2b9ed67724080fa54c8565de93260ff3a4b23830985dc9cec0249da6": {
            "currency": "btc",
            "txid": "20456b0d2b9ed67724080fa54c8565de93260ff3a4b23830985dc9cec0249da6",
            "size": 225,
            "block": 322976,
            "time": 1411947003,
            "input": 14380000,
            "output": 14370000,
            "inputs": [{
                "prevTxHash": "fc6d9d60b45883277aa6024fac3154442f6be741666ca6d18d98319f102bb362",
                "prevTxoutIndex": 1,
                "prevTxoutType": "pubkeyhash",
                "value": 14380000,
                "address": "16RE7T8Qg5KsiBCy6ec8qGz5WVHomPUvV5",
                "hash160": "3b6d8e836fac98fa223dba707599074bb31f1d29",
                "scriptSig": "473044022019edfa6354f26f53e4e5bc5ecb509ab66b30168f533e76f5417c224524cca6d802207e5bf6177df965ab25f30e038992caf8276613110ea194d7f2133390df017b390121032a84ef553df655b0476f68b882be234daaef5461db25e703216b17a4bb3af97f",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }, {
                "index": 1,
                "value": 14360000,
                "scriptPubKey": "76a914f6e49faaf1c7b0195cde7d83e157f4160286478d88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 f6e49faaf1c7b0195cde7d83e157f4160286478d OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1PWT7F8SrYKVpQbzHkcgYQ89CN5NCmRWdB",
                "hash160": "f6e49faaf1c7b0195cde7d83e157f4160286478d",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 10000,
            "fees": 10000
        },
        "txid_bb6062e735f3e84830d25e3666ab10c03a2c40b07f560d72878fdb23aa760418": {
            "currency": "btc",
            "txid": "bb6062e735f3e84830d25e3666ab10c03a2c40b07f560d72878fdb23aa760418",
            "size": 226,
            "block": 322976,
            "time": 1411947003,
            "input": 115179222,
            "output": 115169222,
            "inputs": [{
                "prevTxHash": "be897c1f20862861ce4d12ba220d21448186e67178fcf6e54c6ec42071b993e6",
                "prevTxoutIndex": 1,
                "prevTxoutType": "pubkeyhash",
                "value": 115179222,
                "address": "1Mu5C5XWcogDSQ7C8iV1fZDEgCXEeqr1MU",
                "hash160": "e53ba4e7a6c3d0d4b53c9cba36a2990902007d02",
                "scriptSig": "483045022100cdf1dd3afe55d54ab57e68b77c1d1fcb422269111a65d326147ca7331648f2b502203431e5cdc5b239c64c0f9ce1a34fd1abf070e933cd2e8eec4eec8537be865df90121031049e68814eb374a65cc314ebd397a4d7768a81337f5b3184a43f6b330134bcb",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 115159222,
                "scriptPubKey": "76a9140050d37fa580e1fda74af1820624e2e62ddcb45688ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 0050d37fa580e1fda74af1820624e2e62ddcb456 OP_EQUALVERIFY OP_CHECKSIG",
                "address": "112fpuEHSihyLaWW2qFTU3jSL3Hz78HWxn",
                "hash160": "0050d37fa580e1fda74af1820624e2e62ddcb456",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }, {
                "index": 1,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 10000,
            "fees": 10000
        },
        "txid_91a5623d326e3ff23ededf77b72ee773a2715af76f0ae68d44d8da0f6e820275": {
            "currency": "btc",
            "txid": "91a5623d326e3ff23ededf77b72ee773a2715af76f0ae68d44d8da0f6e820275",
            "size": 226,
            "block": 322976,
            "time": 1411947003,
            "input": 150000,
            "output": 140000,
            "inputs": [{
                "prevTxHash": "8c457eedccd6bd9122ae5f1148f40f0e1fae71355db4b6b88d3843d3ca8c94ed",
                "prevTxoutIndex": 0,
                "prevTxoutType": "pubkeyhash",
                "value": 150000,
                "address": "13uXA8zfLjsnrg69f6FcHVRfwBGobYU3bc",
                "hash160": "1fdf0e4b2c97c9afa9ebfccb6f0406e55bbe5d66",
                "scriptSig": "483045022100c65bfddddbe4914c33bd2b877e582b4669458be22264de5c2b1bd5d5a6724b30022011341b7d0d5acba2bbf57872168779ea861f5293b81c0ff5694625ed1d38fc2f012103a6c9d1e4a0aea368046b70c9dd5d8769b7d8f00df88f5960034c44a5a16ba3aa",
                "sequence": 4294967295
            }],
            "outputs": [{
                "index": 0,
                "value": 10000,
                "scriptPubKey": "76a914681ece05b79dfb4aefa330787b4700f3e0bd03bd88ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 681ece05b79dfb4aefa330787b4700f3e0bd03bd OP_EQUALVERIFY OP_CHECKSIG",
                "address": "1AVYBJcRuYPRSXBqqd1nj8nSpCyxYKUezV",
                "hash160": "681ece05b79dfb4aefa330787b4700f3e0bd03bd",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }, {
                "index": 1,
                "value": 130000,
                "scriptPubKey": "76a91429302cfef9fa3ccc823b2c7e33f3e37d3ae249b288ac",
                "scriptPubKeyASM": "OP_DUP OP_HASH160 29302cfef9fa3ccc823b2c7e33f3e37d3ae249b2 OP_EQUALVERIFY OP_CHECKSIG",
                "address": "14knRBCpCk5CzGLqbacnz5Fh9Aq71G2HtL",
                "hash160": "29302cfef9fa3ccc823b2c7e33f3e37d3ae249b2",
                "type": "pubkeyhash",
                "spent": false,
                "nextTxHash": null,
                "nextTxinIndex": null
            }],
            "value": 10000,
            "fees": 10000
        }
    }
}
```
<small><a href="#docs_home">- back to top</a></small>

---

1. Related Articles
2. [Back to Wallet](../../wallet/)
3. [Installation](../installation/)
4. [Security](../security/)
5. [Accounts](../accounts/)
6. [Contacts](../contacts/)
7. [Table of Contents](../../../)
