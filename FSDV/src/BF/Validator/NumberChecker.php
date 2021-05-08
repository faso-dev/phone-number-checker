<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */


namespace FSDV\BF\Validator;

use FSDV\BF\Regex\NumberRegex;

/**
 * Class NumberChecker
 * @package FSDV\BF\Validator
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