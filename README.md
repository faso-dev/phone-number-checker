# phone-number-checker
This package is used to validate the telephone numbers of the countries taken into account. It also makes it possible to verify that a number is indeed a number of an operator X

# Installation
```shell
composer require faso-dev/phone-number-checker v0.1-beta
```

# Use cases
```php
<?php
/*
 * Copyright (c) 2021. | All Rights Reserved
 * @Author <FASO-DEV> faso-dev@protonmail.ch
 */

use FSDV\BF\Validator\NumberChecker;
use FSDV\BF\Validator\NumberValidator;

require_once __DIR__.'/vendor/autoload.php';

//Vérifie si un numéro au format burkinabé est valide
NumberValidator::validate('+22651000000'); //output: true
NumberValidator::validate('0022651000000'); //output: true
NumberValidator::validate('0022551000000'); //output: false
NumberValidator::validate('51000000'); //output: true

//Vérifie l'opérateur mobile d'un numéro au format Burkinabé
//=======MOOV========
NumberChecker::isMoov('+22651000000'); //output: true
NumberChecker::isMoov('0022651000000'); //output: true
NumberChecker::isMoov('0022654000000'); //output: false
//=======ORANGE========
NumberChecker::isOrange('+22656000000'); //output: true
NumberChecker::isOrange('0022656000000'); //output: true
NumberChecker::isOrange('0022678000000'); //output: false
//=======TELECEL========
NumberChecker::isOrange('+22658000000'); //output: true
NumberChecker::isOrange('0022679000000'); //output: true
NumberChecker::isOrange('0022677000000'); //output: false

```
