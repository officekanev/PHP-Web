<?php
$count = 0;
$array = [];
if(isset($_GET['Submit'])){
    $text = $_GET['input'];
    $text = trim($text);
//    if($text === ''){
//        throw new Exception("Please enter Text in to form");
//    }
    $data = explode(', ', $text);
    if(count($data) === 0 || $data === ''){
        throw new Exception("Please enter Text in to form");
    }
}

if(isset($_GET['Clear'])){

}

include 'printtags_frontend.php';