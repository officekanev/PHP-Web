<?php
//require "08 Longest Increasing Subsequence.html";
//if (isset($_GET['sequence'])) {

    //$sequence = $_GET['sequence'];
    $sequence = '7 3 5 8 -1 0 6 7';
    $elements = explode(' ', $sequence);
    $longestIncreasingSubsequence = '';
    $tempMaxNumber = intval(0);

    for ($x = 0; $x < count($elements); $x++) {

        $initialCounter = intval(0);
        $tempLongestMaxSequence = '';
        $tempNextMax = intval(0);

        for ($j =  $x + 1; $j < count($elements); $j++) {

            $beforNumber = intval($elements[$j - 1]);
            $tempNumber = intval($elements[$j]);
            $haveMatch = false;
            $countIterations = intval(0);

            if($tempMaxNumber == intval(0)){

                if($beforNumber < $tempNumber) {

                    $tempLongestMaxSequence .= $beforNumber . ' ' . $tempNumber . ' ';

                    for ($h = $j + 1; $h < count($elements); $h++) {
                        $next = intval($elements[$h]);
                        if($countIterations == intval(0)){
                            if($next > $tempNumber && $next > $beforNumber){
                                $tempNextMax = $next;
                                $haveMatch = true;
                            }
                        }else{
                            if($next < $tempNextMax && $next > $tempNumber){
                                $tempNextMax = $next;
                                $haveMatch = true;
                            }
                        }
                        $countIterations++;
                    }

                    if( $haveMatch ){
                        $tempLongestMaxSequence .= $tempNextMax . ' ';
                    }

                    $tempMaxNumber = $tempNextMax;
                }
            }else {
                for ($h = $j + 1; $h < count($elements); $h++) {
                    $next = intval($elements[$h]);
                    if($countIterations == intval(0)){
                        if($next > $tempNextMax && $next > $beforNumber){
                            $tempNextMax = $next;
                            $haveMatch = true;
                        }
                    }else{
                        // && $next > $tempNumber
                        if($next > $tempMaxNumber){
                            $tempMaxNumber = $next;
                            $haveMatch = true;
                        }
                    }
                    $countIterations++;
                }

                if( $haveMatch ){
                    $tempLongestMaxSequence .= $tempMaxNumber . ' ';
                }
            }
        }

        if(strlen($tempLongestMaxSequence) > strlen($longestIncreasingSubsequence)){
            $longestIncreasingSubsequence = $tempLongestMaxSequence;
        }
    }

    echo $longestIncreasingSubsequence;
//}


//for ($j =  $x + 1; $j < count($elements); $j++) {
//    $beforNumber = intval($elements[$j - 1]);
//    $tempNumber = intval($elements[$j]);
//
//    if($beforNumber < $tempNumber) {
//
//        if($initialCounter == intval(0)){
//            $tempLongestMaxSequence .= $beforNumber . ' ' . $tempNumber . ' ';
//            $tempMaxNumber = $tempNumber;
//        }else {
//            if($tempNumber > $tempMaxNumber){
//                $tempLongestMaxSequence .= $tempNumber . ' ';
//                $tempMaxNumber = $tempNumber;
//            }
//        }
//
//        $initialCounter++;
//    }
//}
//
//if(strlen($tempLongestMaxSequence) > strlen($longestIncreasingSubsequence)){
//    $longestIncreasingSubsequence = $tempLongestMaxSequence;
//}