<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

declare(strict_types=1);

namespace Zee\Exceptions;

class OverflowException extends \OverflowException implements InformativeException
{
    use ThrowableContextTrait;
}
