<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use RuntimeException as BaseException;

class RuntimeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
