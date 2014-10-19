## Transaction Decode

    GET <API_ENDPOINT>/v0/<CHAIN>/transactionDecode/<TRANSACTION_HEX>
OR
    POST <API_ENDPOINT>/v0/<CHAIN>/transactionDecode
	txn_hex=<TRANSACTION_HEX>

Used to diagnose relay failures, or to check that you're created a transaction correctly for the given [`<CHAIN>`](../../notes/chains/).

This is basically a wrapper for the xcoind `decoderawtransaction` RPC call.

Example Ouput
    {
        "status": "success",
        "data": {
            "txid": "34d23f9a9b07353faa2a6359c4d80fc571d666180ffc92f6425bfb35745e003e",
            "version": 1,
            "locktime": 0,
            "vin": [
                {
                    "txid": "1608de7802b6e73ce0217c334273885f638a2cf9f407345adbadf15d7f5e859d",
                    "vout": 0,
                    "scriptSig": {
                        "asm": "3045022100ab85d07e8f0fc25bfb78c46a52001de4419e9a7c521661d2c2d8e509f88763b102206b39ce0c97f8e79bc55e033f18307227a733fdd3a19ed1b4322626add53ee27901 03d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1",
                        "hex": "483045022100ab85d07e8f0fc25bfb78c46a52001de4419e9a7c521661d2c2d8e509f88763b102206b39ce0c97f8e79bc55e033f18307227a733fdd3a19ed1b4322626add53ee279012103d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1"
                    },
                    "sequence": 4294967295
                },
                {
                    "txid": "e515091749a8bf38d1915539a3efe40c3b89b6b3c00d0bc81314a080c241a705",
                    "vout": 1,
                    "scriptSig": {
                        "asm": "304402203692e8c842c0692e4efee1859998f059bd38fa6b49477b2f490f3d2fc6db2e1c02204c8a5752eeb45d0a543797b685042450cea476ef1f704573dc60ace352e54a9501 03d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1",
                        "hex": "47304402203692e8c842c0692e4efee1859998f059bd38fa6b49477b2f490f3d2fc6db2e1c02204c8a5752eeb45d0a543797b685042450cea476ef1f704573dc60ace352e54a95012103d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1"
                    },
                    "sequence": 4294967295
                },
                {
                    "txid": "5dd5cf7e36073636c308e1cacb6b6b0230a32930d6db76e6fbabd897425ee7ea",
                    "vout": 1,
                    "scriptSig": {
                        "asm": "304402204ba0602cc804000f28399f733b2ab2445111b077fdcb19e80b4557b9ef745b06022002430499c89536a2c37d779638b3eb7634caac748283f2d504ac964d8074888501 03d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1",
                        "hex": "47304402204ba0602cc804000f28399f733b2ab2445111b077fdcb19e80b4557b9ef745b06022002430499c89536a2c37d779638b3eb7634caac748283f2d504ac964d80748885012103d425b0b0ca633ce0627c3cc0f137f384ac716c83eaf079a9f85377f665a930d1"
                    },
                    "sequence": 4294967295
                }
            ],
            "vout": [
                {
                    "value": 3.1,
                    "n": 0,
                    "scriptPubKey": {
                        "asm": "OP_DUP OP_HASH160 c4793a8efccbafb6404f93b1423b268e5cd73212 OP_EQUALVERIFY OP_CHECKSIG",
                        "hex": "76a914c4793a8efccbafb6404f93b1423b268e5cd7321288ac",
                        "reqSigs": 1,
                        "type": "pubkeyhash",
                        "addresses": [
                            "nn71vzREoxnXexAS2jztN8RY4xwPTAAcPY"
                        ]
                    }
                },
                {
                    "value": 2.8999,
                    "n": 1,
                    "scriptPubKey": {
                        "asm": "OP_DUP OP_HASH160 091b2a2595e21f154cfc82f2153a2b482a38bb7a OP_EQUALVERIFY OP_CHECKSIG",
                        "hex": "76a914091b2a2595e21f154cfc82f2153a2b482a38bb7a88ac",
                        "reqSigs": 1,
                        "type": "pubkeyhash",
                        "addresses": [
                            "nV2JtRsf8jtVZuG1Q9o5gLxJQJRqHdvs3B"
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
* [Request object](../../notes/requestobject/)
* [Supported Chains](../../notes/chains/)

#### Access Criteria
* GET
* There is no sensitive or custom information in the data returned by this API method.
* HTTP or HTTPS
* No API key required, but subjected to [usage/rate limits](../../notes/limitsAndTiers/).
* If API key provided, then subject to [Usage Tiers](../../notes/limitsAndTiers/).


1. [Return to API](../../../)
1. [Transaction](../transaction/)
1. [Transaction Relay](../transactionRelay/)
1. [Transaction Decode](../transactionDecode/)
1. [Table of Contents](../../../../../)