<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use RangeException as BaseException;

class RangeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
