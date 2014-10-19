## Transaction Relay

    GET <API_ENDPOINT>/v0/<CHAIN>/transactionRelay/<TRANSACTION_HEX>
OR
    POST <API_ENDPOINT>/v0/<CHAIN>/transactionRelay
	txn_hex=<TRANSACTION_HEX>

Takes a fully formed and signed Transaction and relays to the [`<CHAIN>`](../../notes/chains/) network.
Reurns the `id` of the transaction.

Notes: It might take several seconds between a Transaction being successfully relayed 
at it being queryable via the other API functions. This is because our outgoing node
is independent of our blockchain parser. In effect we wait for the Transaction to be broadcast to the nextwork
and be returned back to us. This ensures our API data reflects to true state of the network.

Example Output
	{
	    "status": "success",
    		"data": {
        		"id": "ffb9bab978152bebdb1ddcff9cd316d11852b79edc2aca0c3f523fceac1f6dde",
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