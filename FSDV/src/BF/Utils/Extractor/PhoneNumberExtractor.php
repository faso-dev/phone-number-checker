<?php


namespace FSDV\BF\Utils\Extractor;

use FSDV\BF\Validator\NumberValidator;

/**
 * Class PhoneNumberExtractor
 * @package FSDV\Utils
 */
class PhoneNumberExtractor implements PhoneNumberExtractorInterface
{

    /**
     * @inheritDoc
     */
    public static function extract(string $phoneNumber): ?string
    {
        if (!NumberValidator::validate($phoneNumber)) return null;
        if (substr($phoneNumber, 0, 4) === '+226') {
            return explode('+226', $phoneNumber)[1] ?? null;
        } elseif (substr($phoneNumber, 0, 5) === '00226') {
            return explode('00226', $phoneNumber)[1] ?? null;
        } else return $phoneNumber;
    }
}