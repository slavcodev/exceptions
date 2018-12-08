<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
