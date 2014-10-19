## Transaction Relay

    GET <API_ENDPOINT>/v0/<CHAIN>/transactionRelay/<TRANSACTION_HEX>
OR
    POST <API_ENDPOINT>/v0/<CHAIN>/transactionRelay
	txn_hex=<TRANSACTION_HEX>

Takes a fully formed and signed Transaction and relays to the blockchain network.
Reurns the `id` of the transaction.

Notes: It might take several seconds between a Transaction being successfully relayed 
at it being queryable via the other API functions. This is because our outgoing node
is indendent of our blockchain parser. In effect we wait for the Transaction to be broadcast to the nextwork
and be returned back to us.

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
* [TransactionDecode](../transactionDecode/)
* [Request object](../../notes/requestobject)

#### Access Criteria
* GET or POST
* There is no sensitive or custom information in the data sent to, or returned by this API method.
* HTTP or HTTPS
* No API key required, but subjected to [usage/rate limits](../../notes/limitsAndTiers).
* If API key provided, then subject to [Usage Tiers](../../notes/limitsAndTiers).



1. [Return to API](../../../)
1. [Return to Transactions](../)
1. [Transaction](../transaction/)
1. [TransactionRelay](../transactionRelay/)
1. [TransactionsRelay](../transactionsRelay/)
1. [TransactionDecode](../transactionDecode/)
1. [Table of Contents](../../../../)
