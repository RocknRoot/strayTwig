# Twig rendering for strayFw

[![Build Status](https://travis-ci.org/RocknRoot/strayTwig.png?branch=master)](https://travis-ci.org/RocknRoot/strayTwig)

[strayFw](https://github.com/RocknRoot/strayFw 'strayFw') is a PHP framework trying to be modern without following fashion, between full-featured frameworks and micro-frameworks.

This repository is an Twig adapter for strayFw.

Code is free, new-BSD license. So... fork us !

## Requirements

* PHP >= 7.0

## Get started

    $ php composer.phar require rocknroot/stray-twig

## Need help ?

You can add an issue on github ! ;)

## Contribute

### Technical considerations

* The framework follows these standards :
    * [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md 'PSR-0')
    * [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md 'PSR-1')
    * [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md 'PSR-2')
    * [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md 'PSR-3')
    * [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md 'PSR-4')

### Static analysis

    $ ./vendor/bin/phan

### Coding standards

    $ curl http://get.sensiolabs.org/php-cs-fixer.phar -o php-cs-fixer.phar
    $ php php-cs-fixer.phar fix src/RocknRoot/StrayFw --level=psr2 --fixers=extra_empty_lines,remove_lines_between_uses,return,single_array_no_trailing_comma,spaces_before_semicolon,spaces_cast,unused_use,whitespacy_lines,concat_with_spaces,ordered_use
