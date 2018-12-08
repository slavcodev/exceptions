<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use RuntimeException as BaseException;

class RuntimeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
