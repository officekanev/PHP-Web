<?php
$input = array_filter(explode(' ', fgets(STDIN)));
$input = explode(" ", trim(fgets(STDIN)));
//$input = explode(' ', trim('8 2.5 2.5 8 2.5'));

$numbers = [];
foreach ($input as $number){
    if(!array_key_exists($number, $numbers)){
        $numbers[$number] = 0;
    }
    $numbers[$number]++;
}
ksort($numbers);

foreach ($numbers as $key => $value){
    echo "$key -> $value times\n";
}




