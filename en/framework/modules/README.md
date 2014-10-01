## Blockstrap Modules

Modules are JavaScript files with a pre-defined pattern designed to communicate with core.

The current modules distributed with core include:

* [Accounts](accounts/)
* [API](api/)
* [Buttons](buttons/)
* [Contacts](contacts/)
* [Currencies](currencies/)
* [Data](data/)
* [Filters](filters/)
* [Forms](forms/)
* [Security](security/)
* [Styles](styles/)
* [Templates](templates/)

--------------------------------------------------------------------------------

An example skeleton module `themes/default/js/modules/theme.js` should be composed as follows:

```
(function($) 
{
    // EMPTY OBJECT
    var theme = {};
    
    // FUNCTIONS FOR OBJECT
    theme.new = function()
    {
        alert('New Function Loaded');
    }
    
    // MERGE THE NEW FUNCTIONS WITH CORE
    $.extend(true, $.fn.blockstrap, {theme:theme});
})
(jQuery);
```

--------------------------------------------------------------------------------

1. Related Articles
2. [Accounts](accounts/)
3. [API](api/)
4. [Buttons](buttons/)
5. [Contacts](contacts/)
6. [Currencies](currencies/)
7. [Data](data/)
8. [Filters](filters/)
9. [Forms](forms/)
10. [Security](security/)
11. [Styles](styles/)
12. [Templates](templates/)
13. [Table of Contents](../../)
