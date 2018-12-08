<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class UnderflowException extends \UnderflowException implements Throwable
{
    use ThrowableContextTrait;
}
