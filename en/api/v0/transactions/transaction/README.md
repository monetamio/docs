## Transaction Information

    GET <API_ENDPOINT>/v0/<CHAIN>/transaction/<TXN_HASH>

Returns information for the specificed Transaction for the specified [`<CHAIN>`](../../notes/chains/)

Returns a [Transaction object](../transactionobject/). By default, only medium Transaction information is returned. For additional [Transaction details](../../notes/detailAndPagination/) use the
?showtxn=1 and showtxnio=1 query parameters. 

### Examples
* [BTC Transaction](https://api.blockstrap.com/v0/btc/transaction/94C0BBEA9CE28A5631642252E0EEAE36F9DC91E62F87310B064CEC4BFCE9DCBA?prettyprint=1)


Example Output
    {
        "status": "success",
        "data": {
            "transaction": {
                "id": "94C0BBEA9CE28A5631642252E0EEAE36F9DC91E62F87310B064CEC4BFCE9DCBA",
                "size": 134,
                "version": 1,
                "time": 0,
                "is_coinbase": 1,
                "fees": 0,
                "block_id": "00000000000000001E1B2CC3C89B90C98DC0C59BC839B38DB6DBEDD5724752A8",
                "block_height": 326035,
                "block_time": 1413727866,
                "confirmations": 0,
                "input_count": 0,
                "input_value": 0,
                "input_value_fiat_now": "0.00",
                "input_value_disp": "0.00000000",
                "output_count": 1,
                "output_value": 2511631223,
                "output_value_fiat_now": 9709.56,
                "output_value_disp": "25.11631223",
                "fees_fiat_now": 0,
                "fees_disp": "0.00000000"
            },
        }
    }

#### Also see
* [Transaction object](../transactionobject/) For a full breakdown of the elements
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
1. [Transaction](../transaction/)
1. [Transaction Relay](../transactionRelay/)
1. [Transaction Decode](../transactionDecode/)
1. [Table of Contents](../../../../../)