# Set of the base exceptions

[![Software License][ico-license]][link-license]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
<!--
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
-->


This repository contains a set of useful exception classes.

The exception classes interface is extended with array of context data,
because often the message and the code are not enough to debug. 

## Install

Via [Composer](https://getcomposer.org)

```bash
composer require zee/exceptions
```

## Usage

*TBD*

## Testing

```bash
# install required files
composer self-update
composer install

# run the test (from project root)
phpunit
```

## Credits

- [Veaceslav Medvedev](https://github.com/slavcodev)
- [All Contributors](../../contributors)

## License

The BSD 2-Clause License. Please see [LICENSE][link-license] for more information.

[ico-version]: https://img.shields.io/packagist/v/zee/exceptions.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/License-BSD%202--Clause-blue.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zee/exceptions/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zee/exceptions.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zee/exceptions.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zee/exceptions
[link-license]: LICENSE
[link-travis]: https://travis-ci.org/zee/exceptions
[link-scrutinizer]: https://scrutinizer-ci.com/g/zee/exceptions/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zee/exceptions
