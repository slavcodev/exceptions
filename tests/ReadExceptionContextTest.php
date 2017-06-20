<?php
/**
 * This file is part of Zee Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/zee/
 */

namespace Zee\Exceptions\Tests;

use PHPUnit\Framework\TestCase;
use Zee\Exceptions;

/**
 * Class ReadExceptionContextTest.
 */
class ReadExceptionContextTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideExceptionClasses
     *
     * @param Exceptions\Throwable $exception
     * @param string $message
     * @param array $context
     * @param int $code
     */
    public function exceptionObjectShouldContainContext(Exceptions\Throwable $exception, string $message, array $context, int $code)
    {
        self::assertSame($message, $exception->getMessage());
        self::assertSame($context, $exception->getContext());
        self::assertSame($code, $exception->getCode());
    }

    public function provideExceptionClasses()
    {
        $message = 'Something went wrong';
        $code = PHP_INT_MAX;
        $context = ['foo' => 'bar'];

        return [
            [new Exceptions\LogicException($message, $context, $code), $message, $context, $code],
            [new Exceptions\BadFunctionCallException($message, $context, $code), $message, $context, $code],
            [new Exceptions\BadMethodCallException($message, $context, $code), $message, $context, $code],
            [new Exceptions\DomainException($message, $context, $code), $message, $context, $code],
            [new Exceptions\InvalidArgumentException($message, $context, $code), $message, $context, $code],
            [new Exceptions\LengthException($message, $context, $code), $message, $context, $code],
            [new Exceptions\OutOfRangeException($message, $context, $code), $message, $context, $code],
            [new Exceptions\RuntimeException($message, $context, $code), $message, $context, $code],
            [new Exceptions\OutOfBoundsException($message, $context, $code), $message, $context, $code],
            [new Exceptions\OverflowException($message, $context, $code), $message, $context, $code],
            [new Exceptions\RangeException($message, $context, $code), $message, $context, $code],
            [new Exceptions\UnderflowException($message, $context, $code), $message, $context, $code],
            [new Exceptions\UnexpectedValueException($message, $context, $code), $message, $context, $code],
        ];
    }
}
