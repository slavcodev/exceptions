<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use RangeException as BaseException;

class RangeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
