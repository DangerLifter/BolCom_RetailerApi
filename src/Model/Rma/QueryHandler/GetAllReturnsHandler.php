<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma\QueryHandler;

use BolCom\RetailerApi\Model\Order\Order;
use BolCom\RetailerApi\Model\Order\Query\GetOrder;
use BolCom\RetailerApi\Model\Rma\Query\GetAllReturns;
use BolCom\RetailerApi\Model\Rma\ReturnItemList;

interface GetAllReturnsHandler
{
    public function __invoke(GetAllReturns $getAllReturns) : ReturnItemList;
}
