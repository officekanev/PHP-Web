<?php
//$input = explode(", ", trim(fgets(STDIN)));
$input = explode(", ", trim('Who was the forty-second president of the U.S.A.?, William Jefferson Clinton'));
echo fillDataInToQUiz($input);

function fillDataInToQUiz($item){
    $output = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
    $output .="<quiz>\n";
    for ($x = 0; $x < count($item); $x+=2) {
        $output .=" <question>\n";
        $output .="     {$item[$x]}\n";
        $output .=" </question>\n";
        $output .=" <answer>\n";
        $output .="     {$item[$x+ 1]}\n";
        $output .=" </answer>\n";
    }
    $output .="</quiz>\n";
    return $output;
}