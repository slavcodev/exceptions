<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use BadFunctionCallException as BaseException;

class BadFunctionCallException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
