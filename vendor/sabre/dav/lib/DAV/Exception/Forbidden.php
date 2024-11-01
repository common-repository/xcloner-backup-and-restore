<?php

declare(strict_types=1);

namespace Sabre\DAV\Exception;

if (!defined('ABSPATH') && PHP_SAPI !== 'cli') { die(); }


use Sabre\DAV;

/**
 * Forbidden.
 *
 * This exception is thrown whenever a user tries to do an operation he's not allowed to
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/ Modified BSD License
 */
class Forbidden extends DAV\Exception
{
    /**
     * Returns the HTTP statuscode for this exception.
     *
     * @return int
     */
    public function getHTTPCode()
    {
        return 403;
    }
}
