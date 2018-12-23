<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class RuntimeException extends \RuntimeException implements InformativeException
{
    use ThrowableContextTrait;
}
