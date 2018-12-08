<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use UnderflowException as BaseException;

class UnderflowException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
