<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class LogicException extends \LogicException implements Throwable
{
    use ThrowableContextTrait;
}
