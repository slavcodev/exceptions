<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

class DomainException extends \DomainException implements InformativeException
{
    use ThrowableContextTrait;
}
