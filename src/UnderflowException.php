<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use UnderflowException as BaseException;

class UnderflowException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
