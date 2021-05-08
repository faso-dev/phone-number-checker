<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */

namespace FSDV\BF\Validator;

/**
 * Interface PhoneNumberPrefixeInterface
 * @package FSDV\BF\Validator
 */
interface PhoneNumberPrefixeInterface
{
    /**
     * @param string $operator
     * @return array
     */
    public static function getPhonePrefixes(string $operator): array;
}