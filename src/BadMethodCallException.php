<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class BadMethodCallException extends \BadMethodCallException implements InformativeException
{
    use ThrowableContextTrait;
}
