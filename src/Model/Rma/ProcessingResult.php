<?php

// phpcs:ignoreFile
// this file is auto-generated by prolic/fpp
// don't edit this file manually

declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Rma;

final class ProcessingResult
{
    const OPTIONS = [
        'PENDING' => 'PENDING',
        'ACCEPTED' => 'ACCEPTED',
        'REJECTED' => 'REJECTED',
		'CANCELLED' => 'CANCELLED',
    ];

    const PENDING = 'PENDING';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
	const CANCELLED = 'CANCELLED';

    private $name;
    private $value;

    private function __construct(string $name)
    {
        $this->name = $name;
        $this->value = self::OPTIONS[$name];
    }

    public static function CANCELLED(): self
	{
		return new self('CANCELLED');
	}

    public static function PENDING(): self
    {
        return new self('PENDING');
    }

    public static function ACCEPTED(): self
    {
        return new self('ACCEPTED');
    }

    public static function REJECTED(): self
    {
        return new self('REJECTED');
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

    public function equals(ProcessingResult $other): bool
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
