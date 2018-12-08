<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use DomainException as BaseException;

/**
 * Class DomainException.
 */
class DomainException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
