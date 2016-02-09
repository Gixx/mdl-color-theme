UNDER DEVELOPMENT, DO NOT USE YET!!!

# Introduction
[The Material Design Lite](https://github.com/google/material-design-lite) (MDL) from Google is a really great thing if
you want to create semantic websites with nice looking elements that also fit for mobile devices.

But if you want to use it via composer / brewer / npm from a vendor folder, you will get only the default "blue-indigo" theme.
 
This library supposed to solve this problem via provide only those CSS rules which has affect on the color theme.

This library is not part of the official MDL library.
Please read the [The Material Design Lite license](LICENSE-MDL).

Requirements
------------

- [PHP 5.5+](http://php.net/downloads.php) (for composer)
- [Sass](http://sass-lang.com/install) (for compile scss files)
- [Material Design Lite](https://github.com/google/material-design-lite)
- [Java] (http://www.java.com/en/download/mac_download.jsp) (for the YUI compressor)
- [YUI Compressor](http://yui.github.io/yuicompressor/)

Installation
------------

- Download and unzip the source files or clone the repository
- Download and unzip the [Material Design Lite](https://github.com/google/material-design-lite) into the vendor folder or use the composer by running the `php composer.phar install` command to get the required MDL packages
- Use the [YUI Compressor](http://yui.github.io/yuicompressor/) in the library folder

How to use
----------
- Run the following commands to generate, compile and compress the `scss` files:

```bash
php library/generate.themes.php

library/compile-and-compress.sh
```

- Include the compiled CSS of your choice from the package/minified folder into your HTML.

Change Log
----------

- Check [Change log](CHANGELOG.md)



