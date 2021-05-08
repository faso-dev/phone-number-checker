<?php


namespace FSDV\BF\Utils\Extractor;

/**
 * Interface PhoneNumberPrefixExtractorInterface
 * @package FSDV\Utils
 */
interface PhoneNumberPrefixExtractorInterface extends PhoneNumberExtractorInterface
{
    /**
     * Extract phone number prefix without the country code
     * @param string $phoneNumber
     * @return string|null
     */
    public static function extract(string $phoneNumber): ?string;
}