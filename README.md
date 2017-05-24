# Twig rendering for strayFw

[![Build Status](https://travis-ci.org/RocknRoot/strayTwig.png?branch=master)](https://travis-ci.org/RocknRoot/strayTwig)

[strayFw](https://github.com/RocknRoot/strayFw 'strayFw') is a PHP framework trying to be modern without following fashion, between full-featured frameworks and micro-frameworks.

This repository is a Twig adapter for strayFw.

Code is free, new-BSD license. So... fork us !

## Requirements

* PHP >= 7.0
* PHP >= 7.1 for development (phan)

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

    $ curl -L http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -o php-cs-fixer.phar
    $ php php-cs-fixer.phar fix src/RocknRoot/StrayFw --rules='{"@PSR2": true,"no_trailing_comma_in_singleline_array":true,"no_singleline_whitespace_before_semicolons":true,"concat_space":{"spacing":"one"},"no_unused_imports":true,"no_whitespace_in_blank_line":true,"ordered_imports":true,"blank_line_after_opening_tag":true,"declare_equal_normalize":{"space":"single"},"function_typehint_space":true,"hash_to_slash_comment":true,"lowercase_cast":true,"method_separation":true,"native_function_casing":true,"no_blank_lines_after_class_opening":true,"no_blank_lines_after_phpdoc":true,"no_leading_import_slash":true,"no_leading_namespace_whitespace":true,"no_mixed_echo_print":{"use":"echo"}}'
