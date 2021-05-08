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


use FSDV\BF\Validator\PhoneNumber;

require_once __DIR__ . '/vendor/autoload.php';

//Vérifie si un numéro au format burkinabé est valide
PhoneNumber::validate('+22651000000'); //output: true
PhoneNumber::validate('0022651000000'); //output: true
PhoneNumber::validate('0022551000000'); //output: false
PhoneNumber::validate('51000000'); //output: false

//Vérifie l'opérateur mobile d'un numéro au format Burkinabé
//=======MOOV========
PhoneNumber::isMoov('+22651000000'); //output: true
PhoneNumber::isMoov('0022651000000'); //output: true
PhoneNumber::isMoov('0022654000000'); //output: false
//=======ORANGE========
PhoneNumber::isOrange('+22656000000'); //output: true
PhoneNumber::isOrange('0022656000000'); //output: true
PhoneNumber::isOrange('0022678000000'); //output: false
//=======TELECEL========
PhoneNumber::isTelecel('+22658000000'); //output: true
PhoneNumber::isTelecel('0022679000000'); //output: true
PhoneNumber::isTelecel('0022677000000'); //output: false

//Obtenir l'opérateur mobile d'un numéro de télephone
PhoneNumber::getOperator('+22651000000'); //output: MOOV BURKINA
PhoneNumber::getOperator('+22656000000'); //output: ORANGE BURKINA
PhoneNumber::getOperator('+22658000000'); //output: TELECEL BURKINA

//Obtenir les préfixes d'un opérateur mobile
PhoneNumber::getPhonePrefixes(PhoneNumber::MOOV_BURKINA); //output: ['01','02','51','52','53','60','61','62','63','70','71','72','73]
PhoneNumber::getPhonePrefixes(PhoneNumber::ORANGE_BURKINA); //output: ['07','54','55','56','57','64','65','66','67','74','75','76','77']
PhoneNumber::getPhonePrefixes(PhoneNumber::TELECEL_BURKINA); //output: ['58','59','68','69','78','79]

```
