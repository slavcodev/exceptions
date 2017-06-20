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

use Throwable as BaseThrowable;

/**
 * Marker interface for exceptions with context information.
 */
interface Throwable extends BaseThrowable
{
    /**
     * @return array
     */
    public function getContext() : array;
}
