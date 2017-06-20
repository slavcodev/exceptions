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

use OutOfBoundsException as BaseException;

/**
 * Class OutOfBoundsException.
 */
class OutOfBoundsException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
