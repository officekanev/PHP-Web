<?php
//$coordinates = explode(", ", trim(fgets(STDIN)));
$coordinates = explode(", ", trim('3, 0, 0, 4'));
$x1 = intval($coordinates[0]);
$y1 = intval($coordinates[1]);
$x2 = intval($coordinates[2]);
$y2 = intval($coordinates[3]);

validityChecker($x1, $y1, $x2, $y2);

function validityChecker($x1, $y1, $x2, $y2){
    $sieA = pow(($x1 + $y1), 2);
    $sieB = pow((0 + 0), 2);
    $result = sqrt($sieA + $sieB);
    $A = pow(($x2 + $y2), 2);
    $B = pow((0 + 0), 2);
    $result1 = sqrt($A + $B);
    $C = pow(($x1 + $y1), 2);
    $D = pow(($x2 + $y2), 2);
    $result2 = sqrt($C + $D);
    if($result % 1 === intval(0)){
        echo "{" . $x1 ."}, " . "{". $y1 ."}"." to {0}, {0} is valid\n";
    }else {
        echo "{" . $x1 ."}, " . "{". $y1 ."}"." to {0}, {0} is invalid\n";
    }
    if($result1 % 1 === intval(0)){
        echo "{" . $x2 ."}, " . "{". $y2 ."}"." to {0}, {0} is valid\n";
    }else {
        echo "{" . $x2 ."}, " . "{". $y2 ."}"." to {0}, {0} is invalid\n";
    }
    if($result2 % 1 === intval(0)){
        echo "{" . $x1 ."}, " . "{". $y1 ."}" . " to ". "{" . $x2 ."}, " . "{". $y2 ."}" . " is valid\n";
    }else {
        echo "{" . $x1 ."}, " . "{". $y1 ."}" . " to ". "{" . $x2 ."}, " . "{". $y2 ."}" . " is invalid\n";
    }
}