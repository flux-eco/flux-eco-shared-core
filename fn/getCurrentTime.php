<?php

namespace fluxValueObject;

use FluxEco\ValueObject\Api;

function getCurrentTime(): string
{
    return Api::new()->createCurrentTime()->getValue();
}