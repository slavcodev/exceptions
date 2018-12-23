<?php
/**
 * {@see https://github.com/zee/ Zee Project (c)}
 */

namespace Zee\Exceptions;

/**
 * Marker interface for exceptions with context information.
 */
interface InformativeException extends \Throwable
{
    public function getContext() : array;
}
