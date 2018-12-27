<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

declare(strict_types=1);

namespace Zee\Exceptions;

class OutOfRangeException extends \OutOfRangeException implements InformativeException
{
    use ThrowableContextTrait;
}
