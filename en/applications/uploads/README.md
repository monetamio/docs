## Blockchain Uploader

The Blockchain Uploader provides a way to store hashes of file content and pointers to their location within the various blockchains supported by Blockstrap. You can also store an optional password (for chains with 80 byte op_return limits) to protected uploaded files.

-----

It is a standalone PHP application that requires an Apache Server with CURL functionality. It utilizes the BlockStrap [API](../../../api/) and [PHP SDK](../../../sdks/php/) to register and retreave credentials to and from all supported blockchains, as seen below:

[![uploads.blockstrap.com](../../../_libs/img/docs/applications/uploads/home.png)](http://uploads.blockstrap.com)

For more information pertaining to this application please see the following:

* [Live Demo](http://uploads.blockstrap.com/)
* [Installing Blockchain Uploader](installation/)
* [Downloads](../../downloads/)

The full-source code is available on [GitHub](http://github.com/blockstrap/uploads/).

-----

1. Related Articles
4. [Table of Contents](../../)