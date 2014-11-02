## Explorer Installation

After having [downloaded](../../../downloads/) the explorer, you will see that the ZIP file contains a `htdocs` folder, from within which you should point the root of your domain. It is also in this folder (before htdocs) that you should add your configuration file.

You should see `config.ini.sample` in your downloads. Rename this to `config.ini` or create a new file that includes these settings:

```
[analytics]
google = ADD-YOUR-API-KEY-TO-TRACk-PAGE-VIEWS

[api]
service = http://api.blockstrap.com
version = v0
default = btc
key = ADD-YOUR-API-KEY-TO-AVOID-RATE-LIMITING

[chains]
btc = Bitcoin
ltc = Litecoin
doge = Dogecoin
btct = BTC Testnet
ltct = LTC Testnet
dogt = DOGE Testnet
```

Please note that the `api > default` setting indicates which currency to show on the homepage.

You can add or remove (supported) currencies via the `chains` list.

__Please note that at this stage, this application will only work using the Blockstrap API and has yet been designed for API-neutrality.__

For an API neutral solution, you should explore our [Framework](../../../framework/).

---

1. Related Articles
2. [Back to Explorer](../../explorer/)
3. [Installation](../installation/)
4. [Table of Contents](../../../)
