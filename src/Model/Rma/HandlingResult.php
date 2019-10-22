<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class HandlingResult
{
    const OPTIONS = [
        'RETURN_RECEIVED' => 'RETURN_RECEIVED',
        'EXCHANGE_PRODUCT' => 'EXCHANGE_PRODUCT',
        'RETURN_DOES_NOT_MEET_CONDITIONS' => 'RETURN_DOES_NOT_MEET_CONDITIONS',
        'REPAIR_PRODUCT' => 'REPAIR_PRODUCT',
        'CUSTOMER_KEEPS_PRODUCT_PAID' => 'CUSTOMER_KEEPS_PRODUCT_PAID',
        'STILL_APPROVED' => 'STILL_APPROVED',
		'FAILED_TO_COLLECT_BY_TRANSPORTER' => 'FAILED_TO_COLLECT_BY_TRANSPORTER',
		'RETURN_ITEM_LOST' => 'RETURN_ITEM_LOST',
		'EXCESSIVE_RETURN' => 'EXCESSIVE_RETURN',
    ];

    const RETURN_RECEIVED = 'RETURN_RECEIVED';
    const EXCHANGE_PRODUCT = 'EXCHANGE_PRODUCT';
    const RETURN_DOES_NOT_MEET_CONDITIONS = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    const REPAIR_PRODUCT = 'REPAIR_PRODUCT';
    const CUSTOMER_KEEPS_PRODUCT_PAID = 'CUSTOMER_KEEPS_PRODUCT_PAID';
    const STILL_APPROVED = 'STILL_APPROVED';
    const FAILED_TO_COLLECT_BY_TRANSPORTER = 'FAILED_TO_COLLECT_BY_TRANSPORTER';
    const RETURN_ITEM_LOST = 'RETURN_ITEM_LOST';
    const EXCESSIVE_RETURN = 'EXCESSIVE_RETURN';

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function EXCESSIVE_RETURN(): self
	{
		return new self('EXCESSIVE_RETURN');
	}

    public static function RETURN_ITEM_LOST(): self
	{
		return new self('RETURN_ITEM_LOST');
	}

    public static function FAILED_TO_COLLECT_BY_TRANSPORTER(): self
	{
		return new self('FAILED_TO_COLLECT_BY_TRANSPORTER');
	}

    public static function RETURN_RECEIVED(): self
    {
        return new self('RETURN_RECEIVED');
    }

    public static function EXCHANGE_PRODUCT(): self
    {
        return new self('EXCHANGE_PRODUCT');
    }

    public static function RETURN_DOES_NOT_MEET_CONDITIONS(): self
    {
        return new self('RETURN_DOES_NOT_MEET_CONDITIONS');
    }

    public static function REPAIR_PRODUCT(): self
    {
        return new self('REPAIR_PRODUCT');
    }

    public static function CUSTOMER_KEEPS_PRODUCT_PAID(): self
    {
        return new self('CUSTOMER_KEEPS_PRODUCT_PAID');
    }

    public static function STILL_APPROVED(): self
    {
        return new self('STILL_APPROVED');
    }

    public static function fromName(string $value): self
    {
        if (! isset(self::OPTIONS[$value])) {
            throw new \InvalidArgumentException('Unknown enum name given');
        }

        return self::{$value}();
    }

    public static function fromValue($value): self
    {
        foreach (self::OPTIONS as $name => $v) {
            if ($v === $value) {
                return self::{$name}();
            }
        }

        throw new \InvalidArgumentException('Unknown enum value given: '.$value);
    }

    public function equals(HandlingResult $other): bool
    {
        return \get_class($this) === \get_class($other) && $this->name === $other->name;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function toString(): string
    {
        return $this->name;
    }
}
