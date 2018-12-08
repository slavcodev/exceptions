<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use OverflowException as BaseException;

class OverflowException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
