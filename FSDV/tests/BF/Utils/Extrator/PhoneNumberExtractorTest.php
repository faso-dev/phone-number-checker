<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */


namespace FSDV\BF\Utils\Extrator;


use FSDV\BF\Utils\Extractor\PhoneNumberExtractor;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneNumberExtractorTest
 * @package FSDV\BF\Utils\Extrator
 */
class PhoneNumberExtractorTest extends TestCase
{
    public function testSuccefullyExtractPhoneNumber()
    {
        foreach (['0022651000000' => '51000000', '+22656000000' => '56000000', '+22658000000' => '58000000', '51000000' => '51000000'] as $phoneNumber => $extract) {
            $this->assertEquals(PhoneNumberExtractor::extract($phoneNumber), $extract);
        }
    }

    public function testGetNulWhenExtractPhoneNumberFromInvalidInput()
    {
        foreach (['+56000000', '+2258000000', '00226510000'] as $phoneNumber) {
            $this->assertNull(PhoneNumberExtractor::extract($phoneNumber));
        }
    }
}