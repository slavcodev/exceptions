<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use InvalidArgumentException as BaseException;

class InvalidArgumentException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
