<?php

require_once "Handlers/Handler.php";
require_once "Handlers/CheckNumber.php";
require_once "Handlers/CheckString.php";
require_once "Handlers/CheckArray.php";
require_once "Handlers/CheckUnknown.php";

use Handlers\CheckNumber;
use Handlers\CheckString;
use Handlers\CheckArray;
use Handlers\CheckUnknown;

$checkNumber = new CheckNumber();
$checkString = new CheckString();
$checkArray = new CheckArray();
$checkUnknown = new CheckUnknown();

$checkNumber
    ->setNext($checkString)
    ->setNext($checkArray)
    ->setNext($checkUnknown);

$requests = [10, 'una cadena', 20, 'otra cadena', [1, 2, 3], null, new stdClass()];

foreach ($requests as $request) {
    echo $checkNumber->HandleRequest($request) . PHP_EOL;
}
