<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use OverflowException as BaseException;

/**
 * Class OverflowException.
 */
class OverflowException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
