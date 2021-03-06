<?php
/**
 * (c) Lunaweb Ltd. - Josias Montag
 * Date: 14.03.17
 * Time: 14:25
 */

namespace Lunaweb\EmailVerification\Exceptions;


class UserNotVerifiedException extends \Exception
{

    /**
     * The exception description.
     *
     * @var string
     */
    protected $message = 'This user is not verified.';

}