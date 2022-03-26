<?php

namespace FluxEco\ValueObjectCore\Domain\Models;

class StringObject
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function new(string $value): self
    {
        return new self($value);
    }

    public function getValue(): string
    {
        return $this->value;
    }


    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function equals(\Stringable|\JsonSerializable $other): bool
    {
        return ($this->__toString() === $other->__toString());
    }
}