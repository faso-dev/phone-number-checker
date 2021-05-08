<?php


namespace FSDV\BF\Validator;


use FSDV\BF\Validator\NumberValidator;
use PHPUnit\Framework\TestCase;

class NumberValidatorTest extends TestCase
{
    public function testIfIsValidPhoneNumber()
    {
        foreach (['0022651000000', '+22652000000', '+22654000000', '+22658000000', '+22663000000', '70000000'] as $phoneNumber) {
            $this->assertTrue(NumberValidator::validate($phoneNumber));
        }
    }

    public function testGetFalseWhenPhoneNumberIsInvalid()
    {
        foreach (['+56000000', '+2258000000', '00226510000'] as $phoneNumber) {
            $this->assertFalse(NumberValidator::validate($phoneNumber));
        }
    }
}