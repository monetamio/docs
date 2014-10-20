## Values and Currencies

Blockstrap uses `value` as the representation of the 'money' of the coins.
It's always an Integer value, and always the smallest unit of currency of the coin.
In Bitcoin, these are known as Satoshies.
Working programmatically in Satoshies makes it easier, but harder to display.
To solve this we provide two additional elements that are designed to be displayed to end users.
One is the approximate value of the Satoshies in Fiat currency. 
The other is a formatted version of the `value` converted to full coins with 
thousands separators and a decimal place.


### USD now, others later
Currently USD is the only supported fiat currency. We're working hard to bring others out soon.


### Approximate exchange rates only.
We use [http://openexchangerates.org](http://openexchangerates.org) to provide our exchange rates.
They are approximate and delayed. Don't use them for anything other than providing an approximate 
indicator of value.
There are many cases where we can't get a direct Fiat to Cryptocurrency exchange rate, so we go via USD.
This makes the exchange rate even more approximate



1. [Return to API](../../../)
1. [Return to Notes](../)
1. [Table of Contents](../../../../)
