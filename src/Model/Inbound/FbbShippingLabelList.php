<?php

// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Inbound;

final class FbbShippingLabelList
{
    private $labels;

    public function __construct($labels)
    {
        $this->labels = $labels;
    }

    public function labels()
    {
        return $this->labels;
    }

    public function withLabels($labels): FbbShippingLabelList
    {
        return new self($labels);
    }

    public static function fromArray(array $data): FbbShippingLabelList
    {
        if (! isset($data['labels'])) {
            throw new \InvalidArgumentException("Key 'labels' is missing in data array");
        }

        $labels = $data['labels'];

        return new self($labels);
    }
}
