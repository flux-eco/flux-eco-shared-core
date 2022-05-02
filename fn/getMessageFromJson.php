<?php

namespace fluxValueObject;

use FluxEco\ValueObject\{Api, Message};

function getMessageFromJson(string $messageJson): Message
{
    $messageArray = json_decode($messageJson, true);
    return Api::new()->createMessage($messageArray['headers']['correlationId'], $messageArray['headers']['messageName'], $messageArray['payload'], $messageArray['headers']);
}