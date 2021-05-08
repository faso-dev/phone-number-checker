<?php

/**
 * @author faso-dev <faso-dev@protonmail.ch>
 * @copyright 2020 | All rights reserved
 * @license MIT
 */

namespace FSDV\BF\Validator;

/**
 * Interface NumberValidatorInterface
 * @package FSDV\Validator
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