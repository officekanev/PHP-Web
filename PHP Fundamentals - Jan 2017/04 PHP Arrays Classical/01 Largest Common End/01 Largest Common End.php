<?php
require "01 Largest common end.html";
if (isset($_GET['firststring'])) {
    $number = $_GET['secondstring'];

    $firststring = $_GET['firststring'];
    $secondstring = $_GET['secondstring'];

//    $firststring = 'hi php java csharp sql html css js';
//    $secondstring = 'hi php java js softuni nakov java learn';

//    $firststring = 'hi php java xml csharp sql html css js';
//    $secondstring = 'nakov java sql html css js';
//
//    $firststring = 'I love programming';
//    $secondstring = 'Learn Java or C#';

    $firstelement = explode(' ', $firststring);
    $secondelement = explode(' ', $secondstring);

    $countLenghtfirstString = intval(count($firstelement));
    $countLenghtseconttring = intval(count($secondelement));

    $maxLenghtSecontLeftToRight = intval(0);
    $maxLenghtSecondRightToLeft = intval(0);
    $maxLenghtFirstLeftToRight = intval(0);
    $maxLenghtFirstRightToLeft = intval(0);

    if($countLenghtfirstString >= $countLenghtseconttring) {

        for ($x = 0; $x < count($secondelement); $x++) {

            $tempElemetFirst = $firstelement[$x];
            $tempElemetSecond = $secondelement[$x];
            if($tempElemetFirst === $tempElemetSecond){
                $maxLenghtSecontLeftToRight++;
            }else {
                break;
            }
        }

        $indexcount = intval(0);
        for ($j = count($secondelement) - 1; $j >= 0; $j--) {

            $tempFirst = $secondelement[count($secondelement) - 1 - $indexcount];
            $tempSecond = $firstelement[count($firstelement) - 1 - $indexcount];
            if($tempFirst === $tempSecond){
                $maxLenghtSecondRightToLeft++;
                $indexcount++;
            }else {
                break;
            }
        }

    }else {
        for ($d = 0; $d < count($firstelement); $d++) {

            $tempElemetFirst = $firstelement[$d];
            $tempElemetSecond = $secondelement[$d];
            if($tempElemetFirst === $tempElemetSecond){
                $maxLenghtFirstLeftToRight++;
            }else {
                break;
            }
        }

        $indexcountOne = intval(0);
        for ($f = count($firstelement) - 1; $f >= 0; $f--) {

            $tempFirst = $secondelement[count($secondelement) - 1 - $indexcountOne];
            $tempSecond = $firstelement[count($firstelement) - 1 - $indexcountOne];
            if($tempFirst === $tempSecond){
                $maxLenghtFirstRightToLeft++;
                $indexcountOne++;
            }else {
                break;
            }
        }
    }

    if($maxLenghtSecontLeftToRight > $maxLenghtSecondRightToLeft && $maxLenghtSecontLeftToRight > $maxLenghtFirstLeftToRight
        && $maxLenghtSecontLeftToRight > $maxLenghtFirstRightToLeft) {

        echo $maxLenghtSecontLeftToRight;

    }elseif ($maxLenghtSecondRightToLeft > $maxLenghtSecontLeftToRight && $maxLenghtSecondRightToLeft > $maxLenghtFirstLeftToRight
        && $maxLenghtSecondRightToLeft > $maxLenghtFirstRightToLeft) {

        echo $maxLenghtSecondRightToLeft;

    }elseif ($maxLenghtFirstLeftToRight > $maxLenghtSecontLeftToRight && $maxLenghtFirstLeftToRight > $maxLenghtSecondRightToLeft
        && $maxLenghtFirstLeftToRight > $maxLenghtFirstRightToLeft) {

        echo $maxLenghtFirstLeftToRight;

    }elseif ($maxLenghtFirstRightToLeft > $maxLenghtSecontLeftToRight && $maxLenghtFirstRightToLeft > $maxLenghtSecondRightToLeft
        && $maxLenghtFirstRightToLeft > $maxLenghtFirstLeftToRight) {

        echo $maxLenghtFirstRightToLeft;
    }else {
        echo '0';
    }
}