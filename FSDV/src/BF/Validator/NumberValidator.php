<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\BF\Validator;

/**
 * Class NumberValidator
 * @package FSDV\Orange\Number
 */
class NumberValidator implements NumberValidatorInterface
{
    /**
     * @var string
     */
    private const PHONE_NUMBER_REGEX = '/^(00226|\+226{1})?(\d{8})$/';

    /**
     * @inheritDoc
     */
    public static function validate(string $phoneNumer): bool
    {
        return preg_match(self::PHONE_NUMBER_REGEX, $phoneNumer);
    }

}