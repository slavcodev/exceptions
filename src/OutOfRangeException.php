<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class OutOfRangeException extends \OutOfRangeException implements InformativeException
{
    use ThrowableContextTrait;
}
