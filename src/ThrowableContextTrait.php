<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

/**
 * Trait ThrowableContextTrait.
 */
trait ThrowableContextTrait
{
    /**
     * @var array
     */
    private $context = [];

    /**
     * @param string $message
     * @param array $context
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = '', array $context = [], int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->context = $context;
    }

    /**
     * @return array
     */
    public function getContext() : array
    {
        return $this->context;
    }
}
