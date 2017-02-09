<?php
$input = fgets(STDIN);
$myArray = array();
$uniquie = count_chars($input, 3);
for ($letter = 0; $letter <= strlen($uniquie); $letter++) {
    if (!array_key_exists($input[$letter], $myArray)) {
        $myArray[$input[$letter]] = 0;
    }
    $myArray[$input[$letter]]++;
}
while (list($key, $val) = each($myArray)) {
    echo "$key -> $val" . "\n";
}











//<?php
//$word = 'apple';
//$lettersArr = str_split($word);
//$resultArr = [];
//foreach ($lettersArr as $key => $letter) {
//    if (!array_key_exists($letter, $resultArr)) {
//        $resultArr[$letter] = 0;
//    }
//    $resultArr[$letter]++;
//}
//foreach ($resultArr as $k => $v) {
//    echo $k . ' -> ' . $v . "<br/>";
//}