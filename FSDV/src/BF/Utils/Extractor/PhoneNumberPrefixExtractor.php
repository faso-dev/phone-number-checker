<?php


namespace FSDV\BF\Utils\Extractor;

/**
 * Class PhoneNumberPrefixExtractor
 * @package FSDV\Utils
 */
class PhoneNumberPrefixExtractor implements PhoneNumberPrefixExtractorInterface
{

    /**
     * @inheritDoc
     */
    public static function extract(string $phoneNumber): ?string
    {
        if (null === PhoneNumberExtractor::extract($phoneNumber)) return null;
        return substr(PhoneNumberExtractor::extract($phoneNumber), 0,2);
    }
}