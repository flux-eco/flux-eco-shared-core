<?php

namespace FluxEco\ValueObjectAdapters\Externals;

use DateTime;
use DateTimeZone;


class DateTimeValue
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function new(): self
    {
        $value = self::formatTime(time());
        return new self($value);
    }


    public static function fromTimestamp(int $time): self
    {
        $value = self::formatTime($time);
        return new self($value);
    }

    public static function fromString(string $time): self
    {
        return new self($time);
    }

    private static function formatTime(int $time): string
    {
        $config = DataTimeConfig::new();
        return DateTime::createFromFormat(
            'U.u',//microtime
            number_format($time, 6, '.', ''),//numberformat becuase of microtime
            new DateTimeZone($config->getTimezone())
        )->format($config->getDateTimeFormat());
    }


    final public function getValue(): string
    {
        return $this->value;
    }
}



