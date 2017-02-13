<?php

$coordinates = explode(", ", trim(fgets(STDIN)));
//$coordinates = explode(", ", trim('4, 2, 1.5, 6.5, 1, 3'));
$matchText = "";

for ($j = 1; $j < count($coordinates); $j+=2) {

    $sieX = floatval($coordinates[$j - 1]);
    $sieY = floatval($coordinates[$j]);

    $tempMatch = treasureLocator($sieX, $sieY);
    $matchText .= $tempMatch . "\n";
}

echo $matchText;

function treasureLocator($x, $y){

    if(($x >= floatval(1.0) && $x <= floatval(3.0)) && ($y >= floatval(1.0) && $y <= floatval(3.0))) {
       return "Tuvalu";
    }elseif(($x >= floatval(8.0) && $x <= floatval(9.0)) && ($y >= floatval(0.0) && $y <= floatval(1.0))){
        return "Tokelau";  // Tokelau full match
    }elseif(($x >= floatval(5.0) && $x <= floatval(7.0)) && ($y >= floatval(3.0) && $y <= floatval(6.0))){
        return "Samoa";  // Samoa full match
    }elseif(($x >= floatval(0.0) && $x <= floatval(2.0)) && ($y >= floatval(6.0) && $y <= floatval(8.0))){
        return "Tonga";  // Tonga full match
    }elseif(($x >= floatval(4.0) && $x <= floatval(9.0)) && ($y >= floatval(7.0) && $y <= floatval(8.0))){
        return "Cook";  // Cook full match
    }else{
       return "On the bottom of the ocean";
    }
}


//switch ($tempMatches){
//            case 1 :$matchText .= "Tuvalu\n";
//                $haveMatch = true;
//                break;
//            case 2 :
//                if(!in_array("Tuvalu", $consist)){
//                    $bottomText .= "Tuvalu\n";
//                    array_push($consist, "Tuvalu");
//                    $bottomOcean = true;
//                }
//                break;//=========================
//            case 3 : $matchText .= "Tokelau\n";
//                $haveMatch = true;
//                break;
//            case 4 :
//                if(!in_array("Tokelau", $consist)){
//                    $bottomText .= "Tokelau\n";
//                    array_push($consist, "Tokelau");
//                    $bottomOcean = true;
//                }
//                break;//=========================
//            case 5 : $matchText .= "Samoa\n";
//                $haveMatch = true;
//                break;
//            case 6 :
//                if(!in_array("Samoa", $consist)){
//                    $bottomText .= "Samoa\n";
//                    array_push($consist, "Samoa");
//                    $bottomOcean = true;
//                }
//                break;//=========================
//            case 7 : $matchText .= "Tonga\n";
//                $haveMatch = true;
//                break;
//            case 8 :
//                if(!in_array("Tonga", $consist)){
//                    $bottomText .= "Tonga\n";
//                    array_push($consist, "Tonga");
//                    $bottomOcean = true;
//                }
//                break;//=========================
//            case 9 : $matchText .= "Cook\n";
//                $haveMatch = true;
//                break;
//            case 10 :
//                if(!in_array("Cook", $consist)){
//                    $bottomText .= "Cook\n";
//                    array_push($consist, "Cook");
//                    $bottomOcean = true;
//                }
//                break;
//        }