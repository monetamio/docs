Blockstrap Plugins
==================

The following plugins are available and included with the Blockstrap [Framework](../framework/):

* [Markets](markets/)

A plugin should take the form of a folder with the same name as the plugin (this provides a place to add other non auto-loaded files related to the plugin). 

Including the name of the plugin within the [configuration](../framework/core/configuration/) array will activate the plugin, as follows:

<!--pre-javascript-->
```
{
    "theme": "default",
    "plugins": [
        "markets"
    ]
}
```

This can be seen in `themes/default/config.json`, keeping it attached only to the default theme.

This in-turn activates `plugins/markets/markets.js`, which should be constructed as follows:

<!--pre-javascript-->
```
(function($) 
{
    var markets = {};
    markets.filter = function(data)
    {
        // CAN AUTO-MAGICALLY FILTER DATA NOW USING
        // THE EXAMPLE SEEN BELOW THIS CODE SNIPPET
        return data;
    }
    
    // MERGE THE NEW FUNCTIONS WITH CORE
    $.extend(true, $.fn.blockstrap.plugins, {markets:markets});
    
    // ADD ACTION ATTACHED TO INIT HOOK
    $.fn.blockstrap.core.add_actions(
        'init', 
        'market_updates',
        'plugins.markets', 
        'update', 
        conditions
    );
}
```

The minimum required function is `filter`, which will get auto-assigend as seen below on lines 6, 7 and 8.

It can then be used from within a data array as seen in `themes/default/data/index.json`:

<!--pre-javascript-->
```
{
    "id": "market-conditions",
    "css": "col-md-6 even",
    "header": "Market Conditions",
    "body": {
        "func": "plugin",
        "name": "markets",
        "call": "filter",
        "data": [
            {
                "css": "col-sm-6 panel",
                "id": "btc_to_usd"
            },
            {
                "css": "col-sm-6 panel",
                "id": "daily_txs"
            },
            {
                "css": "col-sm-6 panel",
                "id": "daily_sent"
            },
            {
                "css": "col-sm-6 panel",
                "id": "hash_rate"
            },
            {
                "css": "col-sm-6 panel",
                "id": "btc_discovered"
            },
            {
                "css": "col-sm-6 panel",
                "id": "market_cap"
            }
        ]
    }
}
```

This then gets filtered via the `$.fn.blockstrap.plugins.markets.filter` function as follows:

<!--pre-javascript-->
```
markets.filter = function(data)
{
    var objs = [];']['
    if($.isArray(data))
    {
        $.each(data, function(k, object)
        {
            var css = '';
            var obj = false;
            var content = '';
            if(object.css) css = object.css;
            if(conditions[object.id]) obj = conditions[object.id];
            if(obj.prefix) content+= obj.prefix + ' ';
            if(obj.value) content+= Number(parseFloat(obj.value).toFixed(2)).toLocaleString();
            if(obj.affix) content+= ' ' + obj.affix;
            var html = markets.span(obj.text, content);
            objs.push({css: css, html: html});
        });
    }
    var market_conditions = Mustache.render($.fn.blockstrap.snippets['lists'], {
        objects: [
            {
                id: 'market-conditions',
                items: objs
            }
        ]
    });
    return market_conditions;
}
```

As seen on line 20 above, the function uses the `$.fn.blockstrap.snippets` functionality in combination with Mustache templating to merge the data with an appropriate and pre-defined HTMl structure that could be easily changed as required.

--------------------------------------------------------------------------------

1. Related Articles
2. [Markets](markets/)
3. [Table of Contents](../../)
