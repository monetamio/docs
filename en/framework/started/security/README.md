Security Q&A
============

We will attempt to address some common questions and concerns regarding our determenistic by default nature.

-----------------------------------------------
### What does determenistic by default mean...?

Instead of relying and in-turn being controlled by the [pseudorandomness](http://en.wikipedia.org/wiki/Pseudorandomness) of machines, where the storage of generated [private keys](http://en.wikipedia.org/wiki/Public-key_cryptography) is then required, we use [deterministic algorithms](http://en.wikipedia.org/wiki/Deterministic_algorithm) to generate the keys at the moment they are needed - nullifying their need to be stored anywhere. This allows [core](../../core/) to run entirely in JavaScript from the browser, without the need for a file-storage service, instead relying on [localStorage](http://en.wikipedia.org/wiki/Web_storage) which is merely used to store the publicly available information. Private information is never stored anywhere.


-----------------------------
### What are device salts...?

By default, the [installation of the wallet](../../../applications/wallet/installation/) guides new users through the process of deterministically generating a device salt. Blockstrap then uses compounding encryption through a modular method from within the browser that allows each application developer to deploy systems of varying levels of security dependent on their project needs or application environment. By default, we then use the salt to generate secure deterministic private keys that are not stored anywhere but can be easily recrerated inline at the moment they are required.

----------------------------------------------------------------------
### What happens if I loose or fail to correctly re-create my salt...?

If you loose your device or the browser cache is refreshed, there is always the possibility you could re-create the salt, but if you are unable to remember the details that you used to create the salt, you will probably never be able to re-cover or re-use the accounts created with that salt. If you did not make a back-up of the private keys, you may have lost everything, which is why it is very important you understand the risks.


---

1. Related Articles
2. [Return to Getting Started](../../started/)
3. [Download](../download/)
4. [Security](../security/)
5. [Table of Contents](../../../)
