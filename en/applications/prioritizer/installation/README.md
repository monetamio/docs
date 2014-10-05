## Prioritizer Installation

Prioritizer is a little different to the default [wallet](../../wallet/) in that it features user and admin views.

For example, if we start out with the following `/themes/priority/js/dependenccies/issues.json` array:

```
{
    title: "Issue 01: Provide support for stellar",
    address: "1CCkLALt3Ktjrd6PX7dJ8NqZ8XTGBikAJt",
    details: "This is the full description of Issue 01 at hand!"
},
{
    title: "Issue 02: Provide support for Spanish",
    address: "1Ds2kag9DeYFuUtvoiGyMmAHwpRjx4jZpx",
    details: "This is the full description of Issue 02"
}
```

Administrators of the site will be notified when there are issues that do not have addresses, where new ones will be generated based upon the device site and issue title then asked for them to be added back to the `issues.js` file. Each issue with an address that does not have transactions or has transactions and a balance will then be displayed on the screen like so:

SCREENSHOT REQUIRED HERE!!!

---

1. Related Articles
2. [Back to Prioritizer](../../prioritizer/)
3. [Installation](../installation/)
4. [Table of Contents](../../../)
