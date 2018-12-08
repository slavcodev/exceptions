<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use Throwable as BaseThrowable;

/**
 * Marker interface for exceptions with context information.
 */
interface Throwable extends BaseThrowable
{
    public function getContext() : array;
}
