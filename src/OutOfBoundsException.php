<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use OutOfBoundsException as BaseException;

/**
 * Class OutOfBoundsException.
 */
class OutOfBoundsException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
