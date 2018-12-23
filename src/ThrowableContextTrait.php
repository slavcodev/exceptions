<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

trait ThrowableContextTrait
{
    private $context = [];

    public function __construct(string $message = '', array $context = [], int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->context = $context;
    }

    public function getContext(): array
    {
        return $this->context;
    }
}
