<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Transport;

final class TrackAndTrace
{
    private $value;

    public function __construct(string $value)
    {
        if (!\Assert\Assertion::betweenLength($value, 4, 50)) {
            throw new \InvalidArgumentException('');
        }

        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public static function fromScalar(string $trackAndTrace): TrackAndTrace
    {
        return new self($trackAndTrace);
    }

    public function toScalar(): string
    {
        return $this->value;
    }
}
