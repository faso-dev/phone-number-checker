<?php


namespace FSDV\BF\Utils\Extractor;

/**
 * Interface PhoneNumberExtractorInterface
 * @package FSDV\Utils
 */
interface PhoneNumberExtractorInterface
{
    /**
     * Extract phone number without the country code
     * @param string $phoneNumber
     * @return string|null
     */
    public static function extract(string $phoneNumber): ?string;
}