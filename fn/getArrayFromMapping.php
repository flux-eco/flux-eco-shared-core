<?php

namespace fluxValueObject;

use FluxEco\ValueObject\Api;

function getArrayFromMapping(array $data, array $keyMappingKeyArray): array {
    return Api::new()->createArrayFromMapping($data, $keyMappingKeyArray);
}