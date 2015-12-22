# Twig rendering for strayFw

[![Build Status](https://travis-ci.org/RocknRoot/strayTwig.png?branch=master)](https://travis-ci.org/RocknRoot/strayTwig)

The strayFw is a PHP framework trying to be modern without following fashion.

* Homepage : ???
* [strayFw repository](https://github.com/RocknRoot/strayFw)

User guide is ??somewhere?? on the homepage. So... read it !

Code is free, new-BSD license. So... fork us !

## Requirements

* PHP >= 5.4
* A project using strayFw

## Installation

Coming.

## Need help ?

Read the fraktastic manual !

Or add an issue on github ! ;)

## Contribute

### Technical considerations

* The framework follows these standards :
    * [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md 'PSR-0')
    * [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md 'PSR-1')
    * [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md 'PSR-2')
    * [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md 'PSR-3')
    * [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md 'PSR-4')

### Coding standards

    $ curl http://get.sensiolabs.org/php-cs-fixer.phar -o php-cs-fixer.phar
    $ php php-cs-fixer.phar fix src/RocknRoot/StrayFw --level=psr2 --fixers=extra_empty_lines,remove_lines_between_uses,return,single_array_no_trailing_comma,spaces_before_semicolon,spaces_cast,unused_use,whitespacy_lines,concat_with_spaces,ordered_use
