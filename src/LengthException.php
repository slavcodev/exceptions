<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use LengthException as BaseException;

class LengthException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
