<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use OutOfBoundsException as BaseException;

class OutOfBoundsException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
