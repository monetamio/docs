## Wallet Security

There are two types of people involved in Bitcoin...

Those who put their life savings into experimental hybrid web-wallets behind deterministic layers of compounding encryption that by default don't store private keys anywhere and are still in Beta...

And those who don't.

Don't be that first guy.

_**Don't store any significant value in your Blockstrap wallet while we are in Beta.**_

To understand the implications of using our wallet it is important to know how Blockstrap generates private keys and in what format it stores them (**hint** - _it doesnt_.)

The Blockstrap wallet uses compounding encryption of answers to info such as name, date of birth, city of birth, email address, pin number and password and so on.

With each security question a hash is generated and added to the raw string of the next question to generate a new hash, which in turn is compounded again and combined with the previous to create a new hash. With each question you answer the higher the level of entropy becomes and the harder it is for someone to access your wallet.

You can even add a photo to your device salt as an additional layer of entropy which would need to be uploaded each time to access your private keys.

At the end of the setup process your salt is finally created and parts of it are stored on your device. It is by recreating the steps in the setup process that you generate your device salt and get access to your private keys. If for whatever reason you cannot recreate the answers in the exact same way, you will NOT be able to get access to your wallet.

Because private keys are hashed in the browser before ever reaching us Blockstrap has absolutely no access to them. We never see them and certainly can't help recover them.

We have built it this way as believers of the philosophy that it's harder for someone to hack your brain than it is for them to hack your server. But it's easy to forget things too, so make sure you store all of your details in a safe place.

Should you encounter any bugs, glitches, lack of functionality or any other problems that might compromise your wallet, please let us know immediately by raising an issue on GitHub so we can rectify these accordingly. Your help in making Blockstrap a more reliable experience is greatly appreciated.

**TL;DR - When in doubt, stick to the testnets.**



---

1. Related Articles
2. [Back to Wallet](../../wallet/)
3. [Installation](../installation/)
4. [Security](../security/)
5. [Accounts](../accounts/)
6. [Contacts](../contacts/)
7. [Table of Contents](../../../)
