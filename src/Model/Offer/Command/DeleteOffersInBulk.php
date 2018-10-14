<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer\Command;

final class DeleteOffersInBulk
{
    private $retailerOfferIdentifier;

    public function __construct(\BolCom\RetailerApi\Model\Offer\RetailerOfferIdentifier ...$retailerOfferIdentifier)
    {
        if (count($retailerOfferIdentifier) === 0) {
            throw new \InvalidArgumentException('You should at least provide a single Offer to delete');
        }

        $this->retailerOfferIdentifier = $retailerOfferIdentifier;
    }

    public function retailerOfferIdentifier(): array
    {
        return $this->retailerOfferIdentifier;
    }

    public function withRetailerOfferIdentifier(array $retailerOfferIdentifier): DeleteOffersInBulk
    {
        return new self(...$retailerOfferIdentifier);
    }
}
