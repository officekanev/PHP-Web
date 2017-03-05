<?php
$count = 0;
$mostFreq = "";
$array = [];
if(isset($_GET['Submit'])){
    $text = $_GET['input'];
    $text = 'Pesho, homework, homework, exam, course, PHP';
    $text = trim($text);
    $data = explode(', ', $text);
    for ($x = 0; $x < count($data); $x++) {
        $key = $data[$x];
        if(!array_key_exists($key, $array)){
            $array[$key] = intval(1);
        }else{
            $val = $array[$key];
            $array[$key] = ++$val;
        }
    }
    arsort($array);
    foreach ($array as $key => $value){
            $mostFreq = $key;
            break;
    }

}

if(isset($_GET['Clear'])){
    $array = [];
}

include 'mostfrequent_frontend.php';