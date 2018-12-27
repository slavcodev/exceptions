# Set of the base exceptions

[![Build Status][ico-travis]][link-travis]
[![Code Coverage][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![GitHub issues][ico-issues]][link-issues]

[![Software License][ico-license]][link-license]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![PHP Version][ico-php-version]][link-github]

This repository contains a set of useful exception classes.

The exception classes interface is extended with array of context data,
because often the message and the code are not enough to debug. 

## Install

Using [Composer](https://getcomposer.org):

```bash
composer require zeeproject/exceptions
```

## Usage

Throw exceptions as usual, but you are able also to add context values:

~~~php
throw new InvalidArgumentException('Something went wrong', [
    'key' => 'value',
]);
~~~

Now you can handle this exception, e.q. your error handler may log error details:

~~~php
final class ErrorHandler
{
    private $logger;

    public function __construct(Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function handleException(Exception $exception)
    {
        if ($exception instanceof Zee\Exceptions\Throwable) {
            $this->logger->error($exception->getMessage(), $exception->getContext());
        } else {
            $this->logger->error($exception->getMessage());
        }
    }
}
~~~

## Testing

```bash
phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for more details.

[ico-version]: https://img.shields.io/packagist/v/zeeproject/exceptions.svg?style=for-the-badge&label=Latest
[ico-php-version]: https://img.shields.io/packagist/php-v/zeeproject/exceptions.svg?style=for-the-badge
[ico-license]: https://img.shields.io/badge/License-BSD%202--Clause-blue.svg?style=for-the-badge
[ico-issues]: https://img.shields.io/github/issues/zee/exceptions.svg?style=for-the-badge&logo=github
[ico-travis]: https://img.shields.io/travis/zee/exceptions.svg?style=for-the-badge&logo=travis
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zee/exceptions.svg?style=for-the-badge&logo=scrutinizer
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zee/exceptions.svg?style=for-the-badge&logo=scrutinizer

[link-packagist]: https://packagist.org/packages/zeeproject/exceptions
[link-github]: https://github.com/zee/exceptions
[link-issues]: https://github.com/zee/exceptions/issues
[link-license]: LICENSE
[link-travis]: https://travis-ci.org/zee/exceptions
[link-scrutinizer]: https://scrutinizer-ci.com/g/zee/exceptions/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zee/exceptions
