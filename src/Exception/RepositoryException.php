<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2018-2020 Payvision B.V. (https://www.payvision.com/)
 * @license see LICENCE.TXT
 */

namespace Payvision\SDK\Exception;

use Exception;

class RepositoryException extends Exception
{
    public const FILE_NOT_FOUND = 4100;
}
