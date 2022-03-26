<?php


namespace FluxEco\ValueObjectAdapters\Api;

use FluxEco\ValueObjectCore\Domain;

class StringObject
{

    private Domain\Models\StringObject $stringObject;

    private function __construct(Domain\Models\StringObject $stringObject)
    {
        $this->stringObject = $stringObject;
    }

    public static function fromDomain(Domain\Models\StringObject $stringObject): self
    {
        return new self($stringObject);
    }


    public function getValue(): string
    {
        return $this->stringObject->getValue();
    }


    public function jsonSerialize(): array
    {
        return get_object_vars($this->stringObject);
    }

    public function __toString(): string
    {
        return $this->stringObject->getValue();
    }

    public function equals(\Stringable|\JsonSerializable $other): bool
    {
        return ($this->stringObject->equals($other));
    }
}