<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use OutOfRangeException as BaseException;

class OutOfRangeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
