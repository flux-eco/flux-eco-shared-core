<?php

namespace fluxValueObject;

use FluxEco\ValueObject\Api;

function getNewUuid(): string
{
    return Api::new()->createUuid()->getValue();
}