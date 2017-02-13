<?php
//$initialNumber = intval(trim(fgets(STDIN)));
$initialNumber = intval(trim('9'));
//$comand = explode(", ", trim(fgets(STDIN)));
$comand = explode(", ", trim('dice, spice, chop, bake, fillet'));

for ($x = 0; $x < count($comand); $x++) {
    $tempComand = $comand[$x];
    switch ($tempComand){
        case 'chop' : $initialNumber = chopp($initialNumber);
            echo $initialNumber . "\n";
            break;
        case 'dice' : $initialNumber = dice($initialNumber);
            echo $initialNumber . "\n";
            break;
        case 'spice' : $initialNumber = spice($initialNumber);
            echo $initialNumber . "\n";
            break;
        case 'bake' : $initialNumber = bake($initialNumber);
            echo $initialNumber . "\n";
            break;
        case 'fillet' : $initialNumber = fillet($initialNumber);
            echo $initialNumber . "\n";
            break;
    }
}

function dice($num){
    return intval(sqrt($num));
}

function spice($num){
    return ++$num;
}

function bake($num){
    return $num * intval(3);
}

function fillet($num){
    return $num - ($num * 0.2);
}

function chopp($num){
    return intval($num / 2);
}