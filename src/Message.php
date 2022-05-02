<?php

namespace FluxEco\ValueObject;

class Message implements \JsonSerializable
{

    private array $headers;
    private string $payload;

    private function __construct($headers, $payload)
    {
        $this->headers = $headers;
        $this->payload = $payload;
    }

    public static function new(
        string $correlationId,
        string $messageName,
        string $payload,
        array $additionalHeaders = []
    ) {

        $headers = [
            'correlationId' => $correlationId,
            'messageName' => $messageName
        ];
        if (count($additionalHeaders) > 0) {
            $headers = array_merge($headers, $additionalHeaders);
        }

        return new self(
            $headers, $payload
        );
    }

    public function getCorrelationId() : string
    {
        return $this->headers['correlationId'];
    }

    public function getMessageName() : string
    {
        return $this->headers['messageName'];
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function getPayload() : string
    {
        return $this->payload;
    }

    public function toArray() : array
    {
        return get_object_vars($this);
    }

    public function toJson() : string
    {
        return json_encode(
            $this->toArray()
        );
    }

    public function jsonSerialize() : array
    {
        return $this->toArray();
    }
}
