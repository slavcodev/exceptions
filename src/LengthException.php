<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use LengthException as BaseException;

class LengthException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
