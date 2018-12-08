<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class LengthException extends \LengthException implements Throwable
{
    use ThrowableContextTrait;
}
