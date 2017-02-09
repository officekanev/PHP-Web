<?php
//require "05 Most Frequent Number.html";
//if (isset($_GET['integersequence'])) {
//
//    $sequence = $_GET['integersequence'];
//    //$sequence = '7 7 7 0 2 2 2 0 10 10 10';
//    $elements = explode(' ', $sequence);
//    $maxReppeatNumber = '';
//
//    $countMaxReppeatNumber = intval(0);
//    for ($x = 0; $x < count($elements); $x++) {
//
//        $tempMaxReppeatNumber = intval(0);
//        $templargestSqence = '';
//
//        $beforElement = intval($elements[$x]);
//
//        for ($j = $x + 1; $j < count($elements); $j++) {
//
//            $tempElement = intval($elements[$j]);
//
//            if($beforElement === $tempElement){
//                $tempMaxReppeatNumber++;
//
//                $templargestSqence = $tempElement;
//
//                if($tempMaxReppeatNumber > $countMaxReppeatNumber){
//
//                    $countMaxReppeatNumber = $tempMaxReppeatNumber;
//                    $tempmaxreppeatnumber = intval(0);
//                    $maxReppeatNumber = $templargestSqence;
//                    $templargestSqence = '';
//                }
//            }
//        }
//    }
//
//    echo $maxReppeatNumber;
//}

    //v_donchev

$input = '4 1 1 4 2 3 4 4 1 2 4 9 3';
//$arr = array_map('trim', explode(' ', fgets(STDIN)));
$arr = array_map('trim', explode(' ', $input));
$numbers = [];
foreach ($arr as $num) {
    if (!array_key_exists($num, $numbers)) {
        $numbers[$num] = 0;
    }
    $numbers[$num]++;
}
$best = -1;
$num = null;
foreach ($numbers as $number => $count) {
    if ($count > $best) {
        $best = $count;
        $num = $number;
    }
}
echo $num;