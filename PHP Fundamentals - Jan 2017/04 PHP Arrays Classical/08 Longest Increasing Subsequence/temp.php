<?php

$input = '7 3 5 8 -1 0 6 7';
//$arr = preg_split('/\s+/', trim(fgets(STDIN)));
$arr = preg_split('/\s+/', trim($input));
$length = [];
$prev = [];
for ($i = 0; $i < count($arr); $i++) {
    $length[$i] = 1;
    $prev[$i] = -1;
    for ($j = 0; $j < $i; $j++) {
        if ($arr[$i] > $arr[$j]) {
            if ($length[$j] + 1 > $length[$i]) {
                $prev[$i] = $j;
                $length[$i] = $length[$j] + 1;
            }
        }
    }
}
$max = 0;
$index = -1;
for ($i = 0; $i < count($length); $i++) {
    if ($length[$i] > $max) {
        $max = $length[$i];
        $index = $i;
    }
}
$res = [];
while (true) {
    if ($index == -1) {
        break;
    }
    array_unshift($res, $arr[$index]);
    $index = $prev[$index];
}
echo implode(' ', $res);





//<?php
//
////$sequence = '7 3 5 8 -1 0 6 7';
//$sequence = '1 2 5 3 5 2 4 1';
//$elements = explode(' ', $sequence);
//$longestIncreasingSubsequence = '';
//$countMaxElements = intval(0);
//
//for ($x = 0; $x < count($elements); $x++) {
//
//    $initialCounter = intval(0);
//    $tempLongestMaxSequence = '';
//    $tempNextMax = intval(0);
//
//    for ($j =  $x + 1; $j < count($elements); $j++) {
//
//        $beforNumber = intval($elements[$j - 1]);
//        $tempNumber = intval($elements[$j]);
//        $countIterations = intval(0);
//        $searchMatch = true;
//
//        if($beforNumber < $tempNumber){
//            $tempLongestMaxSequence .= $beforNumber . ' ' . $tempNumber . ' ';
//
//            while ($searchMatch){
//
//                $searchingMaxNumber = intval(0);
//                $tempMaxNumber = $tempNumber;
//                $currentNumber = intval(0);
//                $haveMatch = false;
//                $countElements = intval(2);
//                for ($h =  $j + 1; $h < count($elements); $h++) {
//
//                    $currentNumber = intval($elements[$h]);
//                    if($currentNumber > $tempMaxNumber){
//                        $tempMaxNumber = $currentNumber;
//                        $haveMatch =  true;
//                    }else if($currentNumber < $tempMaxNumber && $currentNumber > $tempNumber){
//                        $tempMaxNumber = $currentNumber;
//                        $haveMatch =  true;
//                        $searchingMaxNumber = $currentNumber;
//                    }
//                }
//
//                if($haveMatch){
//                    $tempLongestMaxSequence .= $searchingMaxNumber . ' ';
//                    $countElements++;
//                    if($currentNumber > $searchingMaxNumber){
//                        $tempLongestMaxSequence .= $currentNumber . ' ';
//                        $countElements++;
//                    }
//                }
//
//                if($countMaxElements < $countElements){
//                    $countMaxElements = $countElements;
//                    $longestIncreasingSubsequence = $tempLongestMaxSequence;
//                }
//                $tempLongestMaxSequence = '';
//                break;
//            }
//        }
//    }
//}
//
//echo $longestIncreasingSubsequence;