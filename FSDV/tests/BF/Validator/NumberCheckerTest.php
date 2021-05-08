<?php


namespace FSDV\BF\Validator;


use PHPUnit\Framework\TestCase;

/**
 * Class NumberCheckerTest
 * @package FSDV\Validator
 */
class NumberCheckerTest extends TestCase
{
    public function testIfIsMoovPhoneNumber()
    {
        foreach (['0022651000000', '+22652000000', '+22663000000', '70000000'] as $phoneNumber) {
            $this->assertTrue(NumberChecker::isMoov($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckMoovPhoneNumberFromInvalidMoovNumber()
    {
        foreach (['+56000000', '+2258000000', '00226540000'] as $phoneNumber) {
            $this->assertFalse(NumberChecker::isMoov($phoneNumber));
        }
    }
    public function testIfIsOrangePhoneNumber()
    {
        foreach (['0022656000000', '+22654000000', '+22666000000', '77000000', '07000000'] as $phoneNumber) {
            $this->assertTrue(NumberChecker::isOrange($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckOrangePhoneNumberFromInvalidOrangeNumber()
    {
        foreach (['+59000000', '+2258000000', '00226510000','79000000'] as $phoneNumber) {
            $this->assertFalse(NumberChecker::isOrange($phoneNumber));
        }
    }

    public function testIfIsTelecelPhoneNumber()
    {
        foreach (['0022658000000', '+22659000000', '+22668000000', '79000000', '78000000'] as $phoneNumber) {
            $this->assertTrue(NumberChecker::isTelecel($phoneNumber));
        }
    }

    public function testGetFalseWhenCheckTelecelPhoneNumberFromInvalidTelecelNumber()
    {
        foreach (['+59000000', '+2250000000', '00226500000','74000000','76000000','72000000'] as $phoneNumber) {
            $this->assertFalse(NumberChecker::isTelecel($phoneNumber));
        }
    }
}