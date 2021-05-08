<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */

namespace FSDV\BF\Validator;

/**
 * Interface NumberValidatorInterface
 * @package FSDV\BF\Validator
 */
interface NumberValidatorInterface
{
    /**
     * Check if a given number is valid
     * @param string $phoneNumer
     * @return bool
     */
    public static function validate(string $phoneNumer): bool;
}