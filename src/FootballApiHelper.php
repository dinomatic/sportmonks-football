<?php

namespace Sportmonks\Football;

use Sportmonks\Football\Exceptions\InvalidDateFormatException;

class FootballApiHelper
{
    public static function verifyDate(string $date, string $format = 'Y-m-d'): string
    {
        // Create DateTime from input string & format
        $dateTime = \DateTime::createFromFormat($format, $date);

        // Check for errors
        $dateTimeErrors = \DateTime::getLastErrors();

        // Validate DateTime
        if (! $dateTime || ($dateTimeErrors
            && ($dateTimeErrors['warning_count'] + $dateTimeErrors['error_count']) > 0)) {
            throw new InvalidDateFormatException();
        }

        // Date is Valid - Return Formatted String
        return $dateTime->format($format);
    }
}
