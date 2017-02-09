<?php
require "primes in range.html";
if (isset($_GET['startnumber'], $_GET['endnumber'])) {
    $startnumber = $_GET['startnumber'];
    $endnumber = $_GET['endnumber'];

    function isPrime($checkCurrentNumer) {
        if($checkCurrentNumer == 1)
            return false;

        if($checkCurrentNumer == 2)
            return true;

        if($checkCurrentNumer % 2 == 0) {
            return false;
        }

        $ceil = ceil(sqrt($checkCurrentNumer));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($checkCurrentNumer % $i == 0)
                return false;
        }

        return true;
    }

    for ($x = $startnumber; $x < $endnumber; $x++) {

        $checkCurrentNumer = isPrime($x);

        if($checkCurrentNumer){
            echo "<strong>$x</strong>, ";
        }else{
            echo $x . ", ";
        }
    }
}
?>