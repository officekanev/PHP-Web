<?php

$tempMatches = array();
$haveAbreak = true;
while ($haveAbreak) {
    $inputNumber = intval(1234);

    for ($hundreds = 1; $hundreds <= intval(9); $hundreds++) {
        $numhundreds = $hundreds;

        if($haveAbreak === false) {
            break;
        }
        for ($tens = 1; $tens <= intval(9); $tens++) {
            $numtens = $tens;
            if($haveAbreak === false) {
                break;
            }
            for ($units = 1; $units <= intval(9); $units++) {
                $numunits = $units;
                if($haveAbreak === false) {
                    break;
                }
                if($numhundreds !== $numtens && $numhundreds !== $numunits &&
                    $numtens !== $numhundreds && $numtens !== $numunits){

                    $number = intval($numhundreds . $numtens . $numunits);

                    if($number <= $inputNumber) {
                        array_push($tempMatches, $number);
                        if($number >= intval(987)){
                            $haveAbreak = false;
                            break;
                        }elseif ($number >= $inputNumber){
                            $haveAbreak = false;
                            break;
                        }
                    }
                }
            }
        }
    }
}

$result = array_unique($tempMatches);
foreach ($result as $num ){
    echo $num . ' ';
}