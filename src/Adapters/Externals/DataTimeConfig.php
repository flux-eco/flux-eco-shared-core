<?php

namespace FluxEco\ValueObject\Adapters\Externals;

class DataTimeConfig
{
    private string $timezone;
    private string $dateTimeFormat;

    private function __construct(
        string $timezone,
        string $dateTimeFormat
    )
    {
        $this->timezone = $timezone;
        $this->dateTimeFormat = $dateTimeFormat;
    }

    public static function new(): self
    {
        return new self(
            'Europe/Berlin',
            'Y-m-d H:i:s.u'
        );
    }


    final public function getTimezone(): string
    {
        return $this->timezone;
    }


    final public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }

}