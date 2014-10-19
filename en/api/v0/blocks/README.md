## Blockstrap Blocks

Block methods return details on Blocks in the blockchain.

* [Block](block/) - Gets details on a Block from it's hash
* [BlockHeight](blockHeight/) - Gets details of Blocks at a given chain height
* [BlockLatest](blockLatest/) - Gets the details of the most recent Block
* [BlocksLatest](blockLatest/) - Gets details of the most recent n Blocks

All Block functions return a [Block object](blockobject/) (or an array of them).
By default, only minimal Transaction information is returned. For additional [Transaction details](../../notes/detailAndPagination/) use the
?showtxn=1 and showtxnio=1 query parameters.


1. [Return to API](../../)
1. [Table of Contents](../../../)
