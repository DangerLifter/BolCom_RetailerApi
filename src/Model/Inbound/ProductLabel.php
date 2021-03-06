<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class ProductLabel
{
    private $ean;
    private $quantity;

    public function __construct(\BolCom\RetailerApi\Model\Offer\Ean $ean, int $quantity)
    {
        $this->ean = $ean;
        $this->quantity = $quantity;
    }

    public function ean(): \BolCom\RetailerApi\Model\Offer\Ean
    {
        return $this->ean;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }

    public function withEan(\BolCom\RetailerApi\Model\Offer\Ean $ean): ProductLabel
    {
        return new self($ean, $this->quantity);
    }

    public function withQuantity(int $quantity): ProductLabel
    {
        return new self($this->ean, $quantity);
    }

    public static function fromArray(array $data): ProductLabel
    {
        if (! isset($data['ean']) || ! \is_string($data['ean'])) {
            throw new \InvalidArgumentException("Key 'ean' is missing in data array or is not a string");
        }

        $ean = \BolCom\RetailerApi\Model\Offer\Ean::fromString($data['ean']);

        if (! isset($data['quantity']) || ! \is_int($data['quantity'])) {
            throw new \InvalidArgumentException("Key 'quantity' is missing in data array or is not a int");
        }

        $quantity = $data['quantity'];

        return new self($ean, $quantity);
    }
}
