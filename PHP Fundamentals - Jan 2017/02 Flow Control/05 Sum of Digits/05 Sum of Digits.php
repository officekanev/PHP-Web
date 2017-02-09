<?php
require "sumofdigit.html";

if (isset($_GET['inputelements'])) {
    $inputelements= $_GET['inputelements'];
//    $inputelements= '1111, 2222, 3333, 4444, asdf';
    $filteredtext = explode(', ', $inputelements);


    echo "<style>
 tr,  th,td{
border: 1px solid black;
text-align: center;
vertical-align: top;
}

table{
    border: 1px solid black;
}

td {
width: 100px;
}

</style>";
    echo "<table>";

    for ($x = 0; $x < count($filteredtext); $x++) {

        $checked = null;
        $sumvalue = intval(0);
        $checkisNumber = true;
        for ($j = 0; $j < strlen($filteredtext[$x]); $j++) {

            $checked = is_numeric($filteredtext[$x][$j]);
            if($checked === false){
                echo "<tr><td>$filteredtext[$x]</td><td>I cannot sum that</td></tr><br>";
                $checkisNumber = false;
                break;
            }else{
                $sumvalue += intval($filteredtext[$x][$j]);
            }
        }

        if($checkisNumber){
            echo "<tr><td>$filteredtext[$x]</td><td>$sumvalue</td></tr><br>";
        }
    }
    echo "</table>";
}