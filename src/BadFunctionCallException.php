<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use BadFunctionCallException as BaseException;

class BadFunctionCallException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
