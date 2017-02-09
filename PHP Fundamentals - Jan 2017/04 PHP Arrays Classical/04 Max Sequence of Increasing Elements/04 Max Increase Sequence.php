<?php
//require "04 Max Increse Sequence.html";
//if (isset($_GET['integersequence'])) {
//
//    $sequence = $_GET['integersequence'];
//    //$sequence = '0 1 1 2 2 3 3';
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
//            $beforelement = intval($elements[$j - 1]);
//            $tempelement = intval($elements[$j]);
//
//            if($beforelement < $tempelement){
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

       //v_donchev

$arr = array_map('trim', explode(' ', fgets(STDIN)));
$longest = 0;
$startIndex = -1;
for ($i = 0; $i < count($arr); $i++) {
    $currentCount = 1;
    $current = $arr[$i];
    for ($k = $i + 1; $k < count($arr); $k++) {
        if ($arr[$k] > $current) {
            $current = $arr[$k];
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
echo implode(' ', array_slice($arr, $startIndex, $longest));