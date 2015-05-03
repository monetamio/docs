## Faucets Installation

After having [downloaded](../../../downloads/) the faucets, you will see that the ZIP file contains a `htdocs` folder, from within which you should point the root of your domain. It is also in this folder (parent of htdocs) that you should add your configuration file (__config.ini__), which should contain the following:

<!--pre-html-->
```
[salts]
emails = XXX
addresses = YYY

[keys]
mandrill = MANDRILL_API_KEY_HERE
doget = RELEVANT_PRIVATE_KEY_HERE
dasht = RELEVANT_PRIVATE_KEY_HERE
ltct = RELEVANT_PRIVATE_KEY_HERE
btct = RELEVANT_PRIVATE_KEY_HERE

[ports]
btct = 1234
doget = 2345
dasht = 3456
ltct = 4567

[app]
name = Blockstrap
email = founders@blockstrap.com
subject = Blockstrap Faucet Claim Code

[addresses]
btct = mxaFY8bG7DgH6AGe4dT3EAaTRd3NG96UHk
dasht = xyq7bwGUzPbSaCucM8r9LvhKZwKVfvacDU
doget = nhY8rzwwQBVj7UkPUDsdZGFMXDCyeCd9FK
ltct = mwJ9ebyT8kzaCECyUqwNU8cRj5aU8jL2op

[codes]
lifetime = 10
daily = 2
weekly = 4
monthly = 6
whitelist = admin@your-domain.com, admin@your-friends-domain.com
```

The `salts` allow you to securely generate deterministic components whislt the `keys` provide you with a way to sign (server-side) un-signed raw transactions generated within the browser.

The `ports` define where the local QTs are hosted whereas the `app` details are used when sending emails.

The `addresses` must refer to those that have `keys` listed above.

The `codes` govern rules regarding which email addresses are able to collect additional payouts. The lifetime, daily, weekly and monthly provide limits based upon the (slightly delayed) Mandrill __Tags__ API whereas the whitelist ables you to override these settings for friends and family.

-----

Please note that the full source code for this application is available via [GitHub](http://github.com/blockstrap/faucets).

---

1. Related Articles
2. [Back to Explorer](../../faucets/)
3. [Installation](../installation/)
4. [Table of Contents](../../../)
