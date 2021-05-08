<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */


namespace FSDV\BF\Utils\Extractor;

/**
 * Class PhoneNumberPrefixExtractor
 * @package FSDV\BF\Utils\Extractor
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