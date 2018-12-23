<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class BadFunctionCallException extends \BadFunctionCallException implements InformativeException
{
    use ThrowableContextTrait;
}
