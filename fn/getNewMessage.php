<?php

namespace fluxValueObject;

use FluxEco\ValueObject\{Api, Message};

function getNewMessage(string $correlationId, string $messageName, string $payload, array $additionalHeaders = []): Message
{
    return Api::new()->createMessage($correlationId, $messageName, $payload, $additionalHeaders);
}