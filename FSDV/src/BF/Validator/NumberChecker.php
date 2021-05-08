<?php


namespace FSDV\BF\Validator;

use FSDV\BF\Regex\NumberRegex;

/**
 * Class NumberChecker
 * @package FSDV\Validator
 */
class NumberChecker implements NumberCheckerInterface
{
    /**
     * @inheritDoc
     */
    public static function isOrange(string $phoneNumber): bool
    {
        return preg_match(NumberRegex::ORANGE_NUMBER_REGEX, $phoneNumber);
    }

    /**
     * @inheritDoc
     */
    public static function isMoov(string $phoneNumber): bool
    {
        return preg_match(NumberRegex::MOOVE_NUMBER_REGEX, $phoneNumber);
    }

    /**
     * @inheritDoc
     */
    public static function isTelecel(string $phoneNumber): bool
    {
        return preg_match(NumberRegex::TELECEL_NUMBER_REGEX, $phoneNumber);
    }
}