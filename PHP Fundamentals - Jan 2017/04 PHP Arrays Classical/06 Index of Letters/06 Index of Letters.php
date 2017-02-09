<?php

 //v_donchev

$input = 'softuni';
//$str = strtolower(trim(fgets(STDIN)));
$str = strtolower(trim($input));
$output = '';
for ($i = 0; $i < strlen($str); $i++) {
    if (ctype_alpha($str[$i])) {
        $pos = letterPosition($str[$i]);
        $output .= "{$str[$i]} -> {$pos}\n";
    }
}
echo trim($output);
function letterPosition($letter)
{
    return ord($letter) - 97;
}






//require "06 Index of Letters.html";
//if (isset($_GET['integersequence'])) {
//
//    $input = $_GET['integersequence'];
//    $sequence = strtolower($input);
//
//    for ($x = 0; $x < strlen($input); $x++) {
//
//        $tempchar = $sequence[$x];
//
//        switch ($tempchar){
//            case 'a' : echo "a -> 0" . "<br>";
//                break;
//            case 'b' : echo "b -> 1" . "<br>";
//                break;
//            case 'c' : echo "c -> 2" . "<br>";
//                break;
//            case 'd' : echo "d -> 3" . "<br>";
//                break;
//            case 'e' : echo "e -> 4" . "<br>";
//                break;
//            case 'f' : echo "f -> 5" . "<br>";
//                break;
//            case 'g' : echo "g -> 6" . "<br>";
//                break;
//            case 'h' : echo "h -> 7" . "<br>";
//                break;
//            case 'i' : echo "i -> 8" . "<br>";
//                break;
//            case 'j' : echo "j -> 9" . "<br>";
//                break;
//            case 'k' : echo "k -> 10" . "<br>";
//                break;
//            case 'l' : echo "l -> 11" . "<br>";
//                break;
//            case 'm' : echo "m -> 12" . "<br>";
//                break;
//            case 'n' : echo "n -> 13" . "<br>";
//                break;
//            case 'o' : echo "o -> 14" . "<br>";
//                break;
//            case 'p' : echo "p -> 15" . "<br>";
//                break;
//            case 'q' : echo "q -> 16" . "<br>";
//                break;
//            case 'r' : echo "r -> 17" . "<br>";
//                break;
//            case 's' : echo "s -> 18" . "<br>";
//                break;
//            case 't' : echo "t -> 19" . "<br>";
//                break;
//            case 'u' : echo "u -> 20" . "<br>";
//                break;
//            case 'v' : echo "v -> 21" . "<br>";
//                break;
//            case 'w' : echo "w -> 22" . "<br>";
//                break;
//            case 'x' : echo "x -> 23" . "<br>";
//                break;
//            case 'y' : echo "y -> 24" . "<br>";
//                break;
//            case 'z' : echo "z -> 25" . "<br>";
//                break;
//        }
//    }
//}