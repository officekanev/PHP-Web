<?php
require_once 'Car.php';

//$line = trim(fgets(STDIN));
$line = trim(2);
$cars = [];
$modelNames = [];

$inputlines = [];
$inputlines[] = "AudiA4 23 0.3";
$inputlines[] = "BMW-M2 45 0.42";

for ($x = 0; $x < $line; $x++) {
    //$tempCar = trim(explode(' ', fgets(STDIN)));
    $tempCar = trim(explode(' ', $inputlines[$x]));
    if(!array_key_exists($tempCar[0], $modelNames)){
        $createNewCar = new Car($tempCar[0], $tempCar[1], $tempCar[2]);
        $cars[] = $createNewCar;
        $modelNames[] = $tempCar[0];
    }
}

$command = trim(fgets(STDIN));
//$command = trim(fgets(STDIN));
while ($command !== 'End'){
    $data = trim(explode(' ', fgets(STDIN)));
    if(array_key_exists($data[1], $modelNames)){
        $index = array_search($data[1], $modelNames);
        $manipulatedCar =  $cars[$index];
        $manipulatedCar->calculateTravelDistance($cars[0], $data[2]);
    }
}
