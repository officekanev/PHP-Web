<?php
require "06modifyString.html";

if (isset($_GET['inputelements'], $_GET['comand'])) {
    $inputelements = $_GET['inputelements'];
    $comand = $_GET['comand'];

//    $inputelements = 'Hello!';
//    $comand = 'shufflestring';


    function checkPalindrom($inputelements)
    {
        for ($x = 0; $x < count($inputelements) / 2; $x++) {
            $frondcharacter = $inputelements[$x];
            $endcharacter = $inputelements[strlen($inputelements) - 1];
            if($frondcharacter !== $endcharacter){
                return false;
            }
        }

        return true;
    }

    function reverseString($inputelements)
    {
        return strrev($inputelements);
    }

    function split($inputelements)
    {
        $output = '';
        $splitedText = explode(' ', $inputelements);
        for ($x = 0; $x < count($splitedText); $x++) {

            for ($j = 0; $j < strlen($splitedText[$x]); $j++) {
                $output .= $splitedText[$x][$j] . ' ';
            }
        }

        return $output;
    }

    function hashString($inputelements)
    {
        return password_hash($inputelements, PASSWORD_DEFAULT);
    }

    function shuffleString($inputelements)
    {
        return str_shuffle($inputelements);
    }

    $result = null;
    switch ($comand){
        case 'checkpalindrom' : $result = checkPalindrom($inputelements);
            break;
        case 'reversestring' : $result = reverseString($inputelements);
            break;
        case 'split' : $result = split($inputelements);
            break;
        case 'hashstring' : $result = hashString($inputelements);
            break;
        case 'shufflestring' : $result = shuffleString($inputelements);
            break;
    }

    if($comand === 'checkpalindrom'){

        if($result == true){
            echo $inputelements . ' is a palindrome !';
        }else{
            echo $inputelements . ' is not a palindrome !';
        }

    }elseif($comand === 'reversestring'){
        echo $result;
    }elseif($comand === 'split'){
        echo $result;
    }elseif($comand === 'hashstring'){
        echo $result;
    }elseif($comand === 'shufflestring'){
        echo $result;
    }
}