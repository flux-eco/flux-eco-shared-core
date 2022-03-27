<?php

namespace FluxEco\ValueObject\Adapters\Externals;

use Ramsey;

class UuidString
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function new(): self
    {
        return new self(Ramsey\Uuid\Uuid::uuid4()->toString());
    }

    final public function getValue(): string
    {
        return $this->value;
    }
}