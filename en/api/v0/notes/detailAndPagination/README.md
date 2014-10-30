## Transaction Detail and Pagination

### Detail levels
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
relationship between the Transaction and the Address.

### Examples
* [BTC Block with minimal Transaction information](https://api.blockstrap.com/v0/btc/blockLatest?prettyprint=1)
* [BTC Transaction with medium information](https://api.blockstrap.com/v0/btc/transaction/ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764?prettyprint=1)
* [BTC Transaction with maximum information](https://api.blockstrap.com/v0/btc/transaction/ABD2D6C1AB01F1CA22137AC67F73ABC72D006A1519F313522FDD759F71347764?showtxnio=1&prettyprint=1)

see [Transaction object](../../transactions/transactionobject/) for more information.


### Pagination
Address methods that return Transactions also support Pagination.
Use ?records=100 to return Transactions in batches of 100
Use $skip=100 to paginate between batches. Note that this is an offset

So, return the first 100 results
?=records=100

Return records 101-200
?records=100&skip=100

Return records 201-300
?records=100&skip=200






1. [Return to API](../../../)
1. [Return to Notes](../)

1. [Table of Contents](../../../../)
