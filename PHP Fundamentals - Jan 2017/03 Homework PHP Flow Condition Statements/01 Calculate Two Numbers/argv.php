<?php
//$stdin = fopen("C:\\xampp\\htdocs\\Projects\\PHP Fundamentals - Jan 2017\\02 flow Control\\01 Calculate Two Numbers\\input.txt", 'r');
//stream_set_blocking(STDIN, 0);
//$csv_ar = fgetcsv(STDIN);
//if (is_array($csv_ar)){
//    print "CVS on STDIN\n";
//} else {
//    print "Look to ARGV for CSV file name.\n";
//}
//$text = fopen("C:\\xampp\\htdocs\\Projects\\PHP Fundamentals - Jan 2017\\02 flow Control\\01 Calculate Two Numbers\\input.txt", "r");
//echo $operation = $argv[0];
echo $operation = $argv[1];
echo $operation = $argv[2];
echo $operation = $argv[3];

$numberOne = intval(fgets(STDIN));
$numberTwo = intval(fgets(STDIN));

if($operation == 'sum') {
    echo " == " . ($numberOne + $numberTwo);
}elseif ($operation == 'subtract') {
    echo " == " . ($numberOne - $numberTwo);
}else {
    echo " == Wrong operation supplied";
}

