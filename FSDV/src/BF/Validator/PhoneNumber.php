<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */


namespace FSDV\BF\Validator;

use FSDV\BF\Prefix\NumberPrefix;
use FSDV\BF\Regex\NumberRegex;

/**
 * Class PhoneNumber
 * @package FSDV\BF\Validator
 */
class PhoneNumber implements
    NumberCheckerInterface,
    NumberValidatorInterface,
    PhoneNumberOperatorInterface,
    PhoneNumberPrefixeInterface
{
    /**
     * @var string
     */
    const MOOV_BURKINA = 'MOOV BURKINA';
    /**
     * @var string
     */
    const ORANGE_BURKINA = 'ORANGE BURKINA';
    /**
     * @var string
     */
    const TELECEL_BURKINA = 'TELECEL BURKINA';

    /**
     * @var string
     */
    private const PHONE_NUMBER_REGEX = '/^(00226|\+226{1})?(\d{8})$/';

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

    /**
     * @inheritDoc
     */
    public static function validate(string $phoneNumer): bool
    {
        return preg_match(self::PHONE_NUMBER_REGEX, $phoneNumer);
    }

    /**
     * @inheritDoc
     */
    public static function getOperator(string $phoneNumber): string
    {
        if (self::isMoov($phoneNumber)) return self::MOOV_BURKINA;
        elseif (self::isOrange($phoneNumber)) return self::ORANGE_BURKINA;
        elseif (self::isTelecel($phoneNumber)) return self::TELECEL_BURKINA;

        return sprintf('UNKNOW OPERTAOR OF PHONE NUMBER %s', $phoneNumber);
    }

    /**
     * @inheritDoc
     */
    public static function getPhonePrefixes(string $operator): array
    {
        switch ($operator) {
            case self::MOOV_BURKINA:
                return explode('|', NumberPrefix::MOOVE_NUMBER_PREFIXES);
            case self::ORANGE_BURKINA:
                return explode('|', NumberPrefix::ORANGE_NUMBER_PREFIXES);
            case self::TELECEL_BURKINA:
                return explode('|', NumberPrefix::TELECEL_NUMBER_PREFIXES);
            default:
                return [];
        }
    }
}