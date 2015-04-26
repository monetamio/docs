## Blockstrap API

Welcome to the Blockstrap API documentation.

Currently in BETA, Blockstrap’s API makes it easy for developers to quickly and confidently build applications and perform transactions for Bitcoin, Litecoin, Dogecoin, DashPay, as well as their corresponding testnets.

The Blockstrap API operates as a simple RESTful JSON API that can be accessed via **`http://api.blockstrap.com`** or **`https://api.blockstrap.com`**.

If you need any help with your implementation or have requests for features, please reach out to us at [support@blockstrap.com](mailto:support@blockstrap.com). By requesting an API key you'll automatically be kept up to date on new features and changes as they are rolled out.



[Click here for quickstart cheatsheet](v0/notes/at-a-glance)

* [Notes](v0/notes) give an overview of the API
  * [Supported chains](v0/notes/chains/)
  * [The request object](v0/notes/requestobject/)
  * [Dangers at the top of the chain](v0/notes/top-of-the-chain/)
  * [Values and currencies](v0/notes/values-and-currencies/)
* [Blocks](v0/blocks) methods return a [Block object](v0/blocks/blockobject/)
  * [block](v0/blocks/block-id/)
  * [blockHeight](v0/blocks/block-height/)
  * [blockLatest](v0/blocks/block-latest/)
* [Transactions](v0/transactions/) methods return a [Transaction object](v0/transactions/transactionobject/)
  * [transaction](v0/transactions/transaction-id/)
  * [transactionDecode](v0/transactions/transaction-decode/)
  * [transactionRelay](v0/transactions/transaction-relay/)
* [Addresses](v0/addresses/) methods return an [Address object](v0/addresses/addressobject/)
  * [address](v0/addresses/address-id/)
  * [addresses](v0/addresses/address-ids/)
  * [addressTransactions](v0/addresses/address-transactions/)
  * [addressUnspents](v0/addresses/address-unspents/)
  * [addressHash160ToAddress](v0/addresses/address-from-hash160/)

---

1. Related Articles
2. [Blocks](v0/blocks/)
3. [Addresses](v0/addresses/)
4. [Transactions](v0/transactions/)
6. [Table of Contents](../)