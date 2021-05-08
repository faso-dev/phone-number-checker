<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */


namespace FSDV\BF\Utils\Extrator;


use FSDV\BF\Utils\Extractor\PhoneNumberPrefixExtractor;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneNumberPrefixExtractorTest
 * @package FSDV\BF\Utils\Extrator
 */
class PhoneNumberPrefixExtractorTest extends TestCase
{
    public function testSuccefullyExtractPhoneNumber()
    {
        foreach (['0022651000000' => '51', '+22656000000' => '56', '+22658000000' => '58', '51000000' => '51'] as $phoneNumber => $extract) {
            $this->assertEquals(PhoneNumberPrefixExtractor::extract($phoneNumber), $extract);
        }
    }

    public function testGetNulWhenExtractPhoneNumberFromInvalidInput()
    {
        foreach (['+56000000', '+2258000000', '00226510000'] as $phoneNumber) {
            $this->assertNull(PhoneNumberPrefixExtractor::extract($phoneNumber));
        }
    }
}