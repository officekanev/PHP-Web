<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<!--required="required"-->
<form method="post">
    Enter Text:&nbsp&nbsp<input type="text" name="text" />
    <input type="radio" name="testcheck" value="checkPalindrome" />Check Palindrome
    <input type="radio" name="testcheck"  value="reverseString"/>Reverse String
    <input type="radio" name="testcheck" value="Split"/>Split
    <input type="radio" name="testcheck" value="hashString"/>Hash String
    <input type="radio" name="testcheck" value="shuffleString"/>Shuffle String
    <input type="submit" name="submit" value="Submit" /><br>
</form>

<?php
if (isset($_POST['submit'] )) {

    $input = htmlentities($_POST['text']);
    $checkTest = ($_POST['testcheck']);

    function checkisPalindrome($word){
        for ($x = 0; $x < strlen($word) / 2; $x++) {
            if($word[$x] !== $word[strlen($word) - 1 - $x]){
                return false;
            }
            return true;
        }
    }

    function revrseString($word) {
        $reversed = strrev($word);
        return $reversed;
    }

    function splitText($word) {
        $Splitedword = '-';
        for ($x = 0; $x < strlen($word); $x++) {
            $Splitedword =  str_replace('-', $word[$x] . " -", $Splitedword);
        }
        $Splitedword =  str_replace('-', "", $Splitedword);
        return $Splitedword;
    }

    function  criptInput($word) {
        $hash = crypt($word);
        return $hash;
    }

    function shuffleSting($word) {
        $shuffled = str_shuffle($word);
        return $shuffled;
    }

    if($checkTest == 'checkPalindrome'){
        $result = checkisPalindrome($input);

        if($result){
            echo $input . ' is not a palindrome!';
        }else{
            echo $input . ' is a palindrome!';
        }
    }

    if($checkTest == 'reverseString') {
       $reverseResult = revrseString($input);
       echo $reverseResult;
    }

    if($checkTest == 'Split') {
        $splitResult = splitText($input);
        echo $splitResult;
    }

    if($checkTest == 'hashString') {
        $criptedText = criptInput($input);
        echo $criptedText;
    }

    if($checkTest == 'shuffleString'){
        $shuffleResult = shuffleSting($input);
        echo $shuffleResult;
    }
}
?>
</body>
</html>












































































































































