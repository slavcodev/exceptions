<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class RangeException extends \RangeException implements Throwable
{
    use ThrowableContextTrait;
}
