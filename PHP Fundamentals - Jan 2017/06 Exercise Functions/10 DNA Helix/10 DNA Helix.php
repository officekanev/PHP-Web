<?php
$numberOfLines = (trim(fgets(STDIN)));
//$numberOfLines = (trim(10));

printLine($numberOfLines);

function printLine($numberOfLines){
    $charCount = intval(0);
    $characterSequence = array('A', 'T', 'C', 'G', 'T', 'T', 'A','G', 'G', 'G');
    for ($x = 1; $x <= $numberOfLines; $x++) {

        $firstChar = $characterSequence[$charCount % (count($characterSequence))];
        $secondChar = $characterSequence[$charCount % (count($characterSequence)) + 1];

        if(intval($x) % intval(4) === intval(1)) {
            echo "**{$firstChar}{$secondChar}**\n";
        }elseif (intval($x) % intval(4) === intval(2)){
            echo "*{$firstChar}--{$secondChar}*\n";
        }elseif (intval($x) % intval(4) === intval(3)){
            echo "{$firstChar}----{$secondChar}\n";
        }elseif (intval($x) % intval(4) === intval(0)){
            echo "*{$firstChar}--{$secondChar}*\n";
        }

        $charCount+=2;
    }
}