<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Infrastructure;

use BolCom\RetailerApi\Handler\Commission\GetCommissionHandler;
use BolCom\RetailerApi\Handler\Commission\GetCommissionListHandler;
use BolCom\RetailerApi\Handler\Inventory\GetInventoryHandler;
use BolCom\RetailerApi\Handler\Offer\CreateOfferHandler;
use BolCom\RetailerApi\Handler\Offer\CreateOfferExportHandler;
use BolCom\RetailerApi\Handler\Offer\DeleteOfferHandler;
use BolCom\RetailerApi\Handler\Offer\GetOfferExportHandler;
use BolCom\RetailerApi\Handler\Offer\GetOfferHandler;
use BolCom\RetailerApi\Handler\Offer\UpdateOfferHandler;
use BolCom\RetailerApi\Handler\Offer\UpdateOfferPriceHandler;
use BolCom\RetailerApi\Handler\Offer\UpdateOfferStockHandler;
use BolCom\RetailerApi\Handler\Order\CancelOrderHandler;
use BolCom\RetailerApi\Handler\Order\GetOrderHandler;
use BolCom\RetailerApi\Handler\Order\ShipOrderItemHandler;
use BolCom\RetailerApi\Handler\ProcessStatus\GetStatusByEntityHandler;
use BolCom\RetailerApi\Handler\ProcessStatus\GetStatusByProcessIdsHandler;
use BolCom\RetailerApi\Handler\Rma\GetAllReturnsHandler;
use BolCom\RetailerApi\Handler\Rma\GetReturnHandler;
use BolCom\RetailerApi\Handler\Rma\HandleReturnHandler;
use BolCom\RetailerApi\Handler\Shipment\GetShipmentHandler;
use BolCom\RetailerApi\Handler\Shipment\GetShipmentListHandler;
use BolCom\RetailerApi\Handler\ShippingLabel\GetShippingLabelsHandler;
use BolCom\RetailerApi\Handler\Transport\GetShippingLabelHandler;
use BolCom\RetailerApi\Model\ClientPoolInterface;
use BolCom\RetailerApi\Handler\Order\GetAllOpenOrdersHandler;
use BolCom\RetailerApi\Model\Commission\Query\GetCommission;
use BolCom\RetailerApi\Model\Commission\Query\GetCommissionList;
use BolCom\RetailerApi\Model\Inventory\Query\GetInventory;
use BolCom\RetailerApi\Model\MessageBusInterface;
use BolCom\RetailerApi\Model\Offer\Command\CreateOffer;
use BolCom\RetailerApi\Model\Offer\Command\CreateOfferExport;
use BolCom\RetailerApi\Model\Offer\Command\DeleteOffer;
use BolCom\RetailerApi\Model\Offer\Command\UpdateOffer;
use BolCom\RetailerApi\Model\Offer\Command\UpdateOfferPrice;
use BolCom\RetailerApi\Model\Offer\Command\UpdateOfferStock;
use BolCom\RetailerApi\Model\Offer\Query\GetOffer;
use BolCom\RetailerApi\Model\Offer\Query\GetOfferExport;
use BolCom\RetailerApi\Model\Order\Command\CancelOrder;
use BolCom\RetailerApi\Model\Order\Command\ShipOrderItem;
use BolCom\RetailerApi\Model\Order\Query\GetAllOpenOrders;
use BolCom\RetailerApi\Model\Order\Query\GetOrder;
use BolCom\RetailerApi\Model\ProcessStatus\Query\GetStatusByEntity;
use BolCom\RetailerApi\Model\ProcessStatus\Query\GetStatusByProcessIds;
use BolCom\RetailerApi\Model\Rma\Command\HandleReturn;
use BolCom\RetailerApi\Model\Rma\Query\GetAllReturns;
use BolCom\RetailerApi\Model\Rma\Query\GetReturn;
use BolCom\RetailerApi\Model\Shipment\Query\GetShipment;
use BolCom\RetailerApi\Model\Shipment\Query\GetShipmentList;
use BolCom\RetailerApi\Model\ShippingLabel\Query\GetShippingLabels;
use BolCom\RetailerApi\Model\Transport\Query\GetShippingLabel;

class MessageBus implements MessageBusInterface
{
    /** @var array $handlerMapping */
    private $handlerMapping;

    /** @var ClientPool $clientPool */
    private $clientPool;

    /**
     * @param ClientPoolInterface $clientPool
     */
    public function __construct(ClientPoolInterface $clientPool)
    {
        $this->handlerMapping = [
            GetCommission::class => GetCommissionHandler::class,
            GetCommissionList::class => GetCommissionListHandler::class,
            GetAllOpenOrders::class => GetAllOpenOrdersHandler::class,
            GetOrder::class => GetOrderHandler::class,
            CancelOrder::class => CancelOrderHandler::class,
            ShipOrderItem::class => ShipOrderItemHandler::class,
            CreateOffer::class => CreateOfferHandler::class,
            UpdateOffer::class => UpdateOfferHandler::class,
            UpdateOfferPrice::class => UpdateOfferPriceHandler::class,
            UpdateOfferStock::class => UpdateOfferStockHandler::class,
            GetOffer::class => GetOfferHandler::class,
            DeleteOffer::class => DeleteOfferHandler::class,
            GetAllReturns::class => GetAllReturnsHandler::class,
            GetReturn::class => GetReturnHandler::class,
            HandleReturn::class => HandleReturnHandler::class,
            GetShippingLabels::class => GetShippingLabelsHandler::class,
            GetShippingLabel::class => GetShippingLabelHandler::class,
            GetStatusByEntity::class => GetStatusByEntityHandler::class,
            GetStatusByProcessIds::class => GetStatusByProcessIdsHandler::class,
            GetShipment::class => GetShipmentHandler::class,
            GetShipmentList::class => GetShipmentListHandler::class,
            GetInventory::class => GetInventoryHandler::class,
			CreateOfferExport::class => CreateOfferExportHandler::class,
			GetOfferExport::class => GetOfferExportHandler::class
        ];

        $this->clientPool = $clientPool;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch($message, string $clientName = ClientPoolInterface::DEFAULT_CLIENT_NAME)
    {
        $commandClass = \get_class($message);
        if (! isset($this->handlerMapping[$commandClass])) {
            throw new \RuntimeException(sprintf('Handler not found for command "%s".', $commandClass));
        }

        $handlerClass = $this->handlerMapping[$commandClass];
        $handler = new $handlerClass($this->clientPool->get($clientName));

        return $handler($message);
    }
}
