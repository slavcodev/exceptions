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

use LengthException as BaseException;

/**
 * Class LengthException.
 */
class LengthException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
