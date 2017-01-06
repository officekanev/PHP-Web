<?php
    $allInput = [2, 5, 1.567808, 0.356, 1234.5678, 333];
    for ($x = 0; $x < count($allInput); $x+=2) {
        $firstNumber = $allInput[$x];
        $secondNumber = $allInput[$x + 1];
        echo '$firstNumber + '.'$secondNumber = '.$firstNumber.' + '.$secondNumber.' = '.round($firstNumber + $secondNumber, 2). "\xA";
    }
?>