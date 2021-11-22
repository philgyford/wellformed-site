# Well-formed website

The code for https://www.well-formed.co.uk

All in git, not currently on GitHub. Files are manually copied to the website using FTP.

Uses http://picocms.org

The `public/` directory should be used for the website.

Important directories/files:

* `public/assets/img/` - Images used on the site.
* `public/content/` - Content for all the pages.
* `public/plugins/WFFunctions.php` - A custom plugin.
* `public/themes/well-formed/` - Templates, including CSS.

## Running locally

In theory we've set Apache up on my laptop to run this as
http://www.well-formed.test


## Running in production

We don't use Composer in production.

We have all the files that Composer installs on the local version added to Git.

On the Webfaction server, we then just do a git pull to fetch the complete set
of files required.


## Installing Pico

We installed Pico 2.0.1 by doing:

    $ curl -sSL https://getcomposer.org/installer | php
    $ php composer.phar create-project picocms/pico-composer public


## Upgrading Pico

In theory you can upgrade Pico in future by doing:

    $ cd public
    $ php composer.phar update

(If you don't have `composer.phar`, or it's out of date, get it again using the first command under Installation, above.)
