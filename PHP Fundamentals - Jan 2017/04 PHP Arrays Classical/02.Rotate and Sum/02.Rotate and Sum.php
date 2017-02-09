<?php

// v_donchev

$input = '3 2 4 -1';
$rot = '2';
$arr = preg_split('/\s+/', trim($input));
$rotations = intval($rot);
$sum = array_fill(0, count($arr), 0);
for ($i = 0; $i < $rotations; $i++) {
    rotateArr($arr);
    sumArrays($sum, $arr);
}
echo implode(' ', $sum);
function rotateArr(&$arr)
{
    $element = array_pop($arr);
    array_unshift($arr, $element);
}
function sumArrays(&$arrSum, $arr)
{
    for ($i = 0; $i < count($arrSum); $i++) {
        $arrSum[$i] = intval($arrSum[$i]) + intval($arr[$i]);
    }
}


//require "02 Rotate and Sum.html";
//if (isset($_GET['arrayEleemnts'])) {
//    $number = $_GET['numberofRotation'];
//
//    $arrayelements = $_GET['arrayEleemnts'];
//    $numberofRotation = $_GET['numberofRotation'];
//
////    $arrayelements = '1 2 3 4 5';
////    $numberofRotation = intval('3');
//    $elements = explode(' ', $arrayelements);
//    $array = new SplFixedArray(count($elements));
//
//    for ($x = 0; $x < count($elements); $x++) {
//        $array[$x] = ${$x} = array();
//    }
//
//    for ($j = 0; $j < $numberofRotation; $j++) {
//        $tempLast = end($elements);
//        array_pop($elements);
//        array_unshift($elements, $tempLast);
//
//        for ($d = 0; $d < count($elements); $d++) {
//            ${$d}[] = $elements[$d];
//        }
//    }
//
//    $output = '';
//    for ($t = 0; $t < count($array); $t++) {
//        $temparr = ${$t};
//
//        $currentsum = intval(0);
//        for ($p = 0; $p < count($temparr); $p++) {
//            $currentsum += intval($temparr[$p]);
//        }
//
//        $output .= $currentsum . ' ';
//    }
//
//   echo $output;
//}



  ?>