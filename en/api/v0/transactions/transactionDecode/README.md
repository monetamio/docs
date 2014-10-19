## Transaction Decode

    GET <API_ENDPOINT>/v0/<CHAIN>/transactionDecode/<TRANSACTION_HEX>
OR
    POST <API_ENDPOINT>/v0/<CHAIN>/transactionDecode
	txn_hex=<TRANSACTION_HEX>

Used to diagnose relay failures, or to check that you're created a transaction correctly.




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
