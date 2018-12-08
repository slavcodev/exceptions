<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class UnexpectedValueException extends \UnexpectedValueException implements Throwable
{
    use ThrowableContextTrait;
}
