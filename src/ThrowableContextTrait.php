<?php
/**
 * This file is part of Zee Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/zee/
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
