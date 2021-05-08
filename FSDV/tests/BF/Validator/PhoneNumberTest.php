<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */


namespace FSDV\BF\Validator;


use FSDV\BF\Prefix\NumberPrefix;
use PHPUnit\Framework\TestCase;

/**
 * Class NumberCheckerTest
 * @package FSDV\Validator
 */
class PhoneNumberTest extends TestCase
{
    public function testIfIsMoovPhoneNumber()
    {
        foreach (['0022651000000', '+22652000000', '+22663000000', '70000000'] as $phoneNumber) {
            $this->assertTrue(PhoneNumber::isMoov($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckMoovPhoneNumberFromInvalidMoovNumber()
    {
        foreach (['+56000000', '+2258000000', '00226540000'] as $phoneNumber) {
            $this->assertFalse(PhoneNumber::isMoov($phoneNumber));
        }
    }

    public function testIfIsOrangePhoneNumber()
    {
        foreach (['0022656000000', '+22654000000', '+22666000000', '77000000', '07000000'] as $phoneNumber) {
            $this->assertTrue(PhoneNumber::isOrange($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckOrangePhoneNumberFromInvalidOrangeNumber()
    {
        foreach (['+59000000', '+2258000000', '00226510000', '79000000'] as $phoneNumber) {
            $this->assertFalse(PhoneNumber::isOrange($phoneNumber));
        }
    }

    public function testIfIsTelecelPhoneNumber()
    {
        foreach (['0022658000000', '+22659000000', '+22668000000', '79000000', '78000000'] as $phoneNumber) {
            $this->assertTrue(PhoneNumber::isTelecel($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckTelecelPhoneNumberFromInvalidTelecelNumber()
    {
        foreach (['+59000000', '+2250000000', '00226500000', '74000000', '76000000', '72000000'] as $phoneNumber) {
            $this->assertFalse(PhoneNumber::isTelecel($phoneNumber));
        }
    }

    public function testIfIsValidPhoneNumber()
    {
        foreach (['0022651000000', '+22652000000', '+22654000000', '+22658000000', '+22663000000', '70000000'] as $phoneNumber) {
            $this->assertTrue(PhoneNumber::validate($phoneNumber));
        }
    }

    public function testGetFalseWhenPhoneNumberIsInvalid()
    {
        foreach (['+56000000', '+2258000000', '00226510000'] as $phoneNumber) {
            $this->assertFalse(PhoneNumber::validate($phoneNumber));
        }
    }

    public function testGetValidOperator()
    {
        foreach (['0022651000000' => PhoneNumber::MOOV_BURKINA, '+22656000000' => PhoneNumber::ORANGE_BURKINA, '+22658000000' => PhoneNumber::TELECEL_BURKINA, '08000000' => 'UNKNOW OPERTAOR OF PHONE NUMBER 08000000'] as $phoneNumber => $operator) {
            $this->assertEquals(PhoneNumber::getOperator($phoneNumber), $operator);
        }
    }

    public function testGetValidMoovPrefixes()
    {
        $this->assertSame(PhoneNumber::getPhonePrefixes(PhoneNumber::MOOV_BURKINA), explode('|', NumberPrefix::MOOVE_NUMBER_PREFIXES));
    }

    public function testGetValidOrangePrefixes()
    {
        $this->assertSame(PhoneNumber::getPhonePrefixes(PhoneNumber::ORANGE_BURKINA), explode('|', NumberPrefix::ORANGE_NUMBER_PREFIXES));
    }

    public function testGetValidTelecelPrefixes()
    {
        $this->assertSame(PhoneNumber::getPhonePrefixes(PhoneNumber::TELECEL_BURKINA), explode('|', NumberPrefix::TELECEL_NUMBER_PREFIXES));
    }
}