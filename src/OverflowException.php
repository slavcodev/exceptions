<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class OverflowException extends \OverflowException implements Throwable
{
    use ThrowableContextTrait;
}
