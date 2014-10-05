## Wallet Contacts

Contacts can be accessed from any application that includes the [$.fn.blockstrap.contacts](../../../framework/modules/contacts/) module.

By utilizing this module, the wallet is able to create and manage contacts.

When first creating a new contacts called ___Blockstrap Donations___, information such as the following is added to [localStorage](http://en.wikipedia.org/wiki/Web_storage):

```
{
    id: "blockstrap_donations",
    name: "Blockstrap Donations",
    currencies: [
        {
            code: "btc",
            currency: "Bitcoin",
            addresses: [
                {
                    key: "13uXA8zfLjsnrg69f6FcHVRfwBGobYU3bc"
                }
            ]
        }
    ],
    data: {
        contacts_email: "info@blockstrap.com"
    },
    tx_to: 0,
    tx_from: 0
}
```
---

Please note that the `id` field is auto-generated base dupon the `name`.

The `currency` selection is a parameter of the function and should only allow those supported via configuration. Verified `addresses` can be added to each currency. Although the Blockstrap data structure is set-up for multiple addresses within multiple currencies, the current UX implementation with the default wallet only allows each contact to use a single currency / address.

The `data` field allows you to assign arbitary information to contacts, such as email addresses.

The `tx_to` and `tx_from` fields are not yet supported.


---

1. Related Articles
2. [Back to Wallet](../../wallet/)
3. [Installation](../installation/)
4. [Security](../security/)
5. [Accounts](../accounts/)
6. [Contacts](../contacts/)
7. [Table of Contents](../../../)
