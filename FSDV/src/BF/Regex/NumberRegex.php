<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 * @license MIT
 */

namespace FSDV\BF\Regex;

/**
 * Contient la liste des constantes des expressions régulières
 * pour la validation des préfixes des oprérateurs télephonique du Burkina
 * Class NumberRegex
 * @package FSDV\BF\Regex
 */
final class NumberRegex
{
    /**
     * @var string
     */
    const ORANGE_NUMBER_REGEX = '/^((00226|\+226{1})?(06|07|54|55|56|57|64|65|66|67|74|75|76|77)(\d{6}))$/';

    /**
     * @var string
     */
    const MOOVE_NUMBER_REGEX = '/^((00226|\+226{1})?(01|02|51|52|53|60|61|62|63|70|71|72|73)(\d{6}))$/';

    /**
     * @var string
     */
    const TELECEL_NUMBER_REGEX = '/^((00226|\+226{1})?(58|59|68|69|78|79)(\d{6}))$/';
}