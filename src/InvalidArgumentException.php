<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use InvalidArgumentException as BaseException;

class InvalidArgumentException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
