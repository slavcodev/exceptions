<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class OutOfBoundsException extends \OutOfBoundsException implements InformativeException
{
    use ThrowableContextTrait;
}
