<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer\Command;

final class UpdateOfferPrice extends \Prooph\Common\Messaging\Command
{
    use \Prooph\Common\Messaging\PayloadTrait;

    const MESSAGE_NAME = 'BolCom\RetailerApi\Model\Offer\Command\UpdateOfferPrice';

    protected $messageName = self::MESSAGE_NAME;

    public function offerId(): \BolCom\RetailerApi\Model\Offer\OfferId
    {
        return \BolCom\RetailerApi\Model\Offer\OfferId::fromString($this->payload['offerId']);
    }

    public function pricing(): \BolCom\RetailerApi\Model\Offer\Pricing
    {
        return \BolCom\RetailerApi\Model\Offer\Pricing::fromArray($this->payload['pricing']);
    }

    public static function with(\BolCom\RetailerApi\Model\Offer\OfferId $offerId, \BolCom\RetailerApi\Model\Offer\Pricing $pricing): UpdateOfferPrice
    {
        return new self([
            'offerId' => $offerId->toString(),
            'pricing' => $pricing->toArray(),
        ]);
    }

    protected function setPayload(array $payload)
    {
        if (! isset($payload['offerId']) || ! \is_string($payload['offerId'])) {
            throw new \InvalidArgumentException("Key 'offerId' is missing in payload or is not a string");
        }

        if (! isset($payload['pricing']) || ! \is_array($payload['pricing'])) {
            throw new \InvalidArgumentException("Key 'pricing' is missing in payload or is not an array");
        }

        $this->payload = $payload;
    }
}
