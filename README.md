# Set of the base exceptions

[![Software License][ico-license]][link-license]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

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

Contributions are welcome and will be fully credited. Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Credits

- [Veaceslav Medvedev](https://github.com/slavcodev)
- [All Contributors](../../contributors)

## License

It's [BSD 2-Clause][link-license].

[ico-version]: https://img.shields.io/packagist/v/zeeproject/exceptions.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/License-BSD%202--Clause-blue.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/zee/exceptions/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/zee/exceptions.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/zee/exceptions.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/zeeproject/exceptions
[link-license]: LICENSE
[link-travis]: https://travis-ci.org/zee/exceptions
[link-scrutinizer]: https://scrutinizer-ci.com/g/zee/exceptions/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/zee/exceptions
