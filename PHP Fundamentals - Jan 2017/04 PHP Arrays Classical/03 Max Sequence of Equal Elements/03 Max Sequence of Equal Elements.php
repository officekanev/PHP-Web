<?php

// v_donchev

$input = '2 1 1 2 3 3 2 2 2 1';
//$arr = array_filter(array_map('trim', explode(' ', fgets(STDIN))));
$arr = array_filter(array_map('trim', explode(' ', $input)));
$longest = 0;
$startIndex = -1;
for ($i = 0; $i < count($arr); $i++) {
    $currentCount = 1;
    for ($k = $i + 1; $k < count($arr); $k++) {
        if ($arr[$k] == $arr[$i]) {
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $longest) {
        $longest = $currentCount;
        $startIndex = $i;
    }
}
echo implode(' ', array_fill(0, $longest, $arr[$startIndex]));


//require "03 Max Sequence.html";
//if (isset($_GET['integersequence'])) {
//
//    $sequence = $_GET['integersequence'];
////    $sequence = '0 1 1 5 2 2 6 3 3';
//    $elements = explode(' ', $sequence);
//    $largestSqence = '';
//
//    $countMaxSequence = intval(0);
//    for ($x = 0; $x < count($elements); $x++) {
//
//        $tempMaxSequence = intval(0);
//        $startIteration = intval(0);
//        $templargestSqence = '';
//
//        $musaka = count($elements);
//        for ($j = $x + 1; $j < count($elements); $j++) {
//            $beforelement = $elements[$j - 1];
//            $tempelement = $elements[$j];
//
//            if($beforelement === $tempelement){
//                $tempMaxSequence++;
//                if($startIteration === 0){
//                    $templargestSqence .= $beforelement . ' ' . $tempelement;
//                }else {
//                    $templargestSqence .= ' ' . $tempelement;
//                }
//
//                if($j === count($elements) - 1 && $tempMaxSequence > $countMaxSequence){
//                    $countMaxSequence = $tempMaxSequence;
//                    $tempMaxSequence = intval(0);
//                    $largestSqence = $templargestSqence;
//                    $templargestSqence = '';
//                }
//            }else {
//                if($tempMaxSequence > $countMaxSequence){
//                    $countMaxSequence = $tempMaxSequence;
//                    $tempMaxSequence = intval(0);
//                    $largestSqence = $templargestSqence;
//                    $templargestSqence = '';
//                }
//                break;
//            }
//
//            $startIteration++;
//        }
//    }
//
//    echo $largestSqence;
//}

