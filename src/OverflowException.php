<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class OverflowException extends \OverflowException implements InformativeException
{
    use ThrowableContextTrait;
}
