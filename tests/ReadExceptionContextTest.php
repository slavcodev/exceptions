<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions\Tests;

use PHPUnit\Framework\TestCase;
use Zee\Exceptions;

class ReadExceptionContextTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideExceptionClasses
     */
    public function exceptionObjectShouldContainContext(string $exceptionClass): void
    {
        $message = 'Something went wrong';
        $code = PHP_INT_MAX;
        $context = ['foo' => 'bar'];

        $exception = new $exceptionClass($message, $context, $code);

        if ($exception instanceof Exceptions\Throwable) {
            self::assertSame($message, $exception->getMessage());
            self::assertSame($context, $exception->getContext());
            self::assertSame($code, $exception->getCode());
        } else {
            self::fail('Invalid exception class');
        }
    }

    public function provideExceptionClasses(): array
    {
        return [
            [Exceptions\LogicException::class],
            [Exceptions\BadFunctionCallException::class],
            [Exceptions\BadMethodCallException::class],
            [Exceptions\DomainException::class],
            [Exceptions\InvalidArgumentException::class],
            [Exceptions\LengthException::class],
            [Exceptions\OutOfRangeException::class],
            [Exceptions\RuntimeException::class],
            [Exceptions\OutOfBoundsException::class],
            [Exceptions\OverflowException::class],
            [Exceptions\RangeException::class],
            [Exceptions\UnderflowException::class],
            [Exceptions\UnexpectedValueException::class],
        ];
    }
}
