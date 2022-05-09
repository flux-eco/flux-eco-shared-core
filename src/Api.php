<?php

namespace FluxEco\ValueObject;

use FluxEco\ValueObject\{Adapters, Core\Ports};

class Api
{
    private Ports\ValueObjectService $service;

    private function __construct(Ports\ValueObjectService $service)
    {
        $this->service = $service;
    }

    public static function new(): self
    {
        $service = Ports\ValueObjectService::new();
        return new self($service);
    }

    public function createArrayFromMapping(array $data, array $keyMappingKeyArray): array {
        return $this->service->createArrayFromMapping($data, $keyMappingKeyArray);
    }

    public function createMessage(string $correlationId, string $messageName, string $payload, array $additionalHeaders = []): Message
    {
        return Message::new($correlationId, $messageName, $payload, $additionalHeaders);
    }

    public function createUuid(): StringObject
    {
        $value = Adapters\Externals\UuidString::new()->getValue();
        return StringObject::fromDomain($this->service->newStringObject($value));
    }

    public function createCurrentTime(): StringObject
    {
        $value = Adapters\Externals\DateTimeValue::new()->getValue();
        return StringObject::fromDomain($this->service->newStringObject($value));
    }
}