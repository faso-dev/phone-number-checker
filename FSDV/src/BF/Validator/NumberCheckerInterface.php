<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */


namespace FSDV\BF\Validator;

/**
 * Interface NumberCheckerInterface
 * @package FSDV\BF\Validator
 */
interface NumberCheckerInterface
{
    /**
     * Check if the given number is Orange number
     * @param string $phoneNumber
     * @return bool
     */
    public static function isOrange(string $phoneNumber): bool;

    /**
     * Check if the given number is Moov number
     * @param string $phoneNumber
     * @return bool
     */
    public static function isMoov(string $phoneNumber): bool;

    /**
     * Check if the given number is Telecel number
     * @param string $phoneNumber
     * @return bool
     */
    public static function isTelecel(string $phoneNumber): bool;
}