## Blockchain Uploader Installation

After having [downloaded](../../../downloads/) the blockchain uploader, you will see that the ZIP file contains a `htdocs` folder, from within which you should point the root of your domain. It is also in this folder (parent of htdocs) that you should add your configuration file (__config.ini__), which should contain the following:

<!--pre-html-->
```
[app]
id = BCAUTH

[salts]
cookie = XXX
address = YYY
username = ZZZ

[addresses]
btc = 1GjHvbkCyYpy3uaNPvHsxe2EptH2RxEvMt
dash = Xhp3RfQKVCsqju3VEcHuMwcMPNbLszEGJG
doge = DJHXpkQGcRydRvocWaeUtZir6c2pXHkUn4
ltc = LbGtaXcsPDQpU6pA8k3sTDmCaG5qFUPAhP
btct = miNyrRGBZkyVxw1RoKMLpEagCcftVQJD22
dasht = y67MSj12Wm9YJA4291VPpnC8pGS128tH4J
doget = ncq5H5EdCwmGVtQtquk2TKyXDTNApoDpwq
ltct = moyssLnSTs6EBWDoyRMaXkUKnDmLCSXBte
```

Please note that the full source code for this application is available via [GitHub](http://github.com/blockstrap/faucets).

---

1. Related Articles
2. [Back to Blockchain Uploader](../../uploads/)
3. [Installation](../installation/)
4. [Table of Contents](../../../)
