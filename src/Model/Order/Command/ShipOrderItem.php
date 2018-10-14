<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Order\Command;

final class ShipOrderItem
{
    private $orderItemId;
    private $shipmentReference;
    private $shippingLabelCode;
    private $transportInstruction;

    public function __construct(\BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId, ?string $shipmentReference, ?string $shippingLabelCode, ?\BolCom\RetailerApi\Model\Transport\TransportInstruction $transportInstruction)
    {
        $this->orderItemId = $orderItemId;
        $this->shipmentReference = $shipmentReference;
        $this->shippingLabelCode = $shippingLabelCode;
        $this->transportInstruction = $transportInstruction;
    }

    public function orderItemId(): \BolCom\RetailerApi\Model\Order\OrderItemId
    {
        return $this->orderItemId;
    }

    public function shipmentReference(): ?string
    {
        return $this->shipmentReference;
    }

    public function shippingLabelCode(): ?string
    {
        return $this->shippingLabelCode;
    }

    public function transportInstruction(): ?\BolCom\RetailerApi\Model\Transport\TransportInstruction
    {
        return $this->transportInstruction;
    }

    public function withOrderItemId(\BolCom\RetailerApi\Model\Order\OrderItemId $orderItemId): ShipOrderItem
    {
        return new self($orderItemId, $this->shipmentReference, $this->shippingLabelCode, $this->transportInstruction);
    }

    public function withShipmentReference(?string $shipmentReference): ShipOrderItem
    {
        return new self($this->orderItemId, $shipmentReference, $this->shippingLabelCode, $this->transportInstruction);
    }

    public function withShippingLabelCode(?string $shippingLabelCode): ShipOrderItem
    {
        return new self($this->orderItemId, $this->shipmentReference, $shippingLabelCode, $this->transportInstruction);
    }

    public function withTransportInstruction(?\BolCom\RetailerApi\Model\Transport\TransportInstruction $transportInstruction): ShipOrderItem
    {
        return new self($this->orderItemId, $this->shipmentReference, $this->shippingLabelCode, $transportInstruction);
    }
}
