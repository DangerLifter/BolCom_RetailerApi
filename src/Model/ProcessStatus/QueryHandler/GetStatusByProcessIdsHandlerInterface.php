<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Model\ProcessStatus\QueryHandler;

use BolCom\RetailerApi\Model\ProcessStatus\ProcessStatuses;
use BolCom\RetailerApi\Model\ProcessStatus\Query\GetStatusByProcessIds;

interface GetStatusByProcessIdsHandlerInterface
{
    public function __invoke(GetStatusByProcessIds $getStatusByProcessIds): ProcessStatuses;
}
