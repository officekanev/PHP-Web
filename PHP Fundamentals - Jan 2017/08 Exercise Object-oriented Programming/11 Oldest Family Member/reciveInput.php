<?php

use FamilMember\Family;
use FamilMember\Person;

require_once 'FamilMember\Person.php';
require_once 'FamilMember\Family.php';

$family = new Family();

//$inputLines = fgets(STDIN);
$inputLines = 3;
$input = [];
$input[] = 'Pesho 3';
$input[] = 'Gosho 4';
$input[] = 'Annie 5';
for ($x = 0; $x <  $inputLines; $x++) {
    //$currentPerson = trim(fgets(STDIN));
    $currentPerson = trim($input[$x]);
    $data = explode(' ', $currentPerson);
    $name = $data[0];
    $age = intval($data[1]);
    $person = new Person($name, $age);
    $family->addMember($person);
}

echo $family->getOldestMember();