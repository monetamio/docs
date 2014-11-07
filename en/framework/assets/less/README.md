LESS.css
========

[Less](http://lesscss.org/) is a CSS pre-processor, meaning that it extends the CSS language, adding features that allow variables, mixins, functions and many other techniques that allow you to make CSS that is more maintainable, themable and extendable. For example:

<!--pre-css-->
```
@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
  -webkit-box-shadow: @style @c;
  box-shadow:         @style @c;
}
.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
  .box-shadow(@style, rgba(0, 0, 0, @alpha));
}
.box {
  color: saturate(@base, 5%);
  border-color: lighten(@base, 30%);
  div { .box-shadow(0 0 5px, 30%) }
}
```

This would compile to:

<!--pre-css-->
```
.box {
  color: #fe33ac;
  border-color: #fdcdea;
}
.box div {
  -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}
```

The `/blockstrap/js/less.js` and `/themes/<active-theme>/less/blockstrap.less` files are only ever included if `less: true` is set within the [configuration](../../core/configuration/).

More information is available for [`$.fn.blockstrap.core.less`](../../core/core-functions/#bs_less).

---

1. Related Articles
2. [Back to Assets](../../assets/)
3. [Dependencies](../dependencies/)
4. [Boostrap](../bootstrap/)
5. [Mustache](../mustache/)
6. [LESS.css](../less/)
7. [Table of Contents](../../../)
