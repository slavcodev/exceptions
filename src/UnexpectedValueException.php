<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
