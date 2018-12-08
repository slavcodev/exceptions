<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

use DomainException as BaseException;

class DomainException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
