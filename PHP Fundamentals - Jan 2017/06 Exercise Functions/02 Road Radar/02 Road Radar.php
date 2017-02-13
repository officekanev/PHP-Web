<?php

$speed = intval(trim(fgets(STDIN)));
//$speed = intval(trim(200));
$zone = trim(fgets(STDIN));
//$zone = trim('motorway');
$limit = getLimit($zone);
$infraction = getInfraction($speed, $limit);
echo $infraction;

function getLimit($zone){
    switch ($zone){
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential':
            $speedLimit = 20;
            break;
        default:
            echo "Not a VAlid Input";
            $speedLimit = 1000;
    }
    return $speedLimit;
}

function getInfraction($speed, $limit){
    $overSpeed = $speed - $limit;
        $result = '';
    if($overSpeed <= 0) {
        $result = false;
    }elseif ($overSpeed <= 20){
        $result = 'speeding';
    }elseif ($overSpeed > 20 && $overSpeed <= 40){
        $result = 'excessive speeding';
    }elseif ($overSpeed > 40){
        $result = 'reckless driving';
    }
    return $result;
}