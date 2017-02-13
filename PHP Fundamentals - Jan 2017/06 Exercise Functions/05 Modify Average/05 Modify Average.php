<?php
$initialNumber = (trim(fgets(STDIN)));
//$initialNumber = (trim('5835'));
while (true){
    if(checkAverageVAlue($initialNumber)){
        echo $initialNumber;
        break;
    }else{
        $initialNumber .= '9';
    }
}

function checkAverageVAlue($numbers){
    $tempResult = intval(0);
    for ($x = 0; $x < strlen($numbers); $x++) {
        $tempResult += intval($numbers[$x]);
    }

    if($tempResult / strlen($numbers) >= 5){
        return true;
    }else{
        return false;
    }
}