<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */


namespace FSDV\BF\Utils\Extractor;

/**
 * Interface PhoneNumberPrefixExtractorInterface
 * @package FSDV\BF\Utils\Extractor
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