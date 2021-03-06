<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class FbbTransporters
{
    private $fbbTransporters;

    /**
     * @param \BolCom\RetailerApi\Model\Inbound\Transporter[]|null $fbbTransporters
     */
    public function __construct(Transporter ...$fbbTransporters)
    {
        $this->fbbTransporters = $fbbTransporters;
    }

    /**
     * @return \BolCom\RetailerApi\Model\Inbound\Transporter[]
     */
    public function fbbTransporters(): array
    {
        return $this->fbbTransporters;
    }

    /**
     * @param \BolCom\RetailerApi\Model\Inbound\Transporter[]|null $fbbTransporters
     * @return \BolCom\RetailerApi\Model\Inbound\FbbTransporters
     */
    public function withFbbTransporters(array $fbbTransporters): FbbTransporters
    {
        return new self(...$fbbTransporters);
    }
}
