# Well-formed website

The code for http://www.well-formed.co.uk

All in git, not currently on GitHub. Files are manually copied to the website using FTP.

Uses http://picocms.org

The `public/` directory should be used for the website.

Important directories/files:

* `public/assets/img/` - Images used on the site.
* `public/content/` - Content for all the pages.
* `public/plugins/WFFunctions.php` - A custom plugin.
* `public/themes/well-formed/` - Templates, including CSS.

## Installation

We installed Pico 2.0.1 by doing:

    $ curl -sSL https://getcomposer.org/installer | php
    $ php composer.phar create-project picocms/pico-composer public
