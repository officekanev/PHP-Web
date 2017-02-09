<?php

//v_donchev

//$input = '1 2 3 3';
//$input = '1 2';
//$input = '1';
//$input = '1 2 3';
////$input = '10 5 5 99 3 4 2 5 1 1 4';
$arr = explode(' ', fgets(STDIN));
//$arr = explode(' ', $input);
$match = false;
for ($i = 0; $i < count($arr); $i++) {
    $leftSum = array_sum(array_slice($arr, 0, $i));
    $rightSum = array_sum(array_slice($arr, $i + 1, count($arr) - ($i + 1)));
    if ($leftSum == $rightSum) {
        echo $i;
        $match = true;
    }
}
if (!$match) {
    echo 'no';
}