<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */

namespace FSDV\BF\Validator;

/**
 * Class NumberValidator
 * @package FSDV\BF\Validator
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