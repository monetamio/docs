## Request Object


Each sucessfull reqest made to the API returns a Request Object. It provides details about the request made to
the API, the parameters used by the Blockstrap API and other request properties. It can be used to debug requests
that are returning 'strange' results and to verify that options passed into the API are correctly interpreted.

Example Output
    "_request": {
            "disclaimer_message": "Usage of this API is subject to our disclaimer and Terms and Conditions. Continued usage indicates your acceptance of these terms.",
            "disclaimer_url": "http:\/\/api.blockstrap.com\/disclaimer.html",
            "request_uuid": "e0bb7d88-201e-42f9-b663-150107b3d179",
            "request_time": 68,
            "request_uri": "\/v0\/btc\/addressTransactions\/1GPCsaSYwH6jcUf3BmgqXD6G5q1ZxJ3gUK?prettyprint=1",
            "request_method": "GET",
            "method_name": "addressTransactions",
            "method_cost": 2,
            "options": {
                "showtxn": false,
                "showtxnio": false,
                "records": 500,
                "skip": 0,
                "currency": "USD",
                "prettyprint": true
            },
            "chain": {
                "code": "BTC",
                "height": 326100
            }
        }

### Elements
* `disclaimer_message`: String, The disclaimer message
* `disclaimer_url`:String, the URL of the full disclaimer
* `request_uuid`: String (uuid) The request identifier uuid
* `request_time`: Integer (ms) Time taken to process the request (minus rendering and transmission)
* `request_uri`: String (url) The URL received by the API
* `request_method`: String ('GET' or 'POST'), HTTP method used by the client
* `method_name`: String, name of the method called
* `method_cost`: Integer, the relative 'cost' of performing this method (used internally to monitor load)
* `options`: Object, showing the options set by the client and used by the method. Not all options are used by each method.
    * `showtxn`: Bool, show additional Transaction data
    * `showtxnio`: Bool, show Transaction inputs and outputs
    * `records`: Integer, how many records to return
    * `skip`: Integer, pagination offset
    * `currency`: String ('USD') The Fiat currency used to show approx fiat values
    * `prettyprint`: Bool, Format for viewing by humans
* `chain`: Object, shows the blockchain used for this request
    * `code`: String the code of the Chain eg BTC, LTCT
    * `height`: Integer, the current height of the blockchain



1. [Return to API](../../../)
1. [Return to Notes](../)
1. [Table of Contents](../../../../)
