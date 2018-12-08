<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use LogicException as BaseException;

class LogicException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
