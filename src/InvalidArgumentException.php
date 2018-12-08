<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class InvalidArgumentException extends \InvalidArgumentException implements Throwable
{
    use ThrowableContextTrait;
}
