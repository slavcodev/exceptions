<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use BadMethodCallException as BaseException;

class BadMethodCallException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
