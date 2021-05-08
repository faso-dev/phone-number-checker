<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */

namespace FSDV\BF\Validator;

/**
 * Interface PhoneNumberOperatorInterface
 * @package FSDV\BF\Validator
 */
interface PhoneNumberOperatorInterface
{
    /**
     * Get number operator
     * @param string $phoneNumber
     * @return string
     */
    public static function getOperator(string $phoneNumber): string;
}