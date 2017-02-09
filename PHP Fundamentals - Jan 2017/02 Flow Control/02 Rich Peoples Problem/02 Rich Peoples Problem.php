<?php
require "Rich Peoples Problem.html";
if (isset($_GET['carmodel'])) {
    $cars = $_GET['carmodel'];

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
    $colors = array('yellow', 'green', 'red', 'purple', 'blue', 'aqua', 'black', 'gray', 'pink', 'orange');
    $amount = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $filteredCars = explode(', ', $cars);

    echo "<table>";
    echo "<tr><th>Car</th><th>Color</th><th>Count</th></tr><br>";
    for ($x = 0; $x < count($filteredCars); $x++) {
        $index1 = rand(0, 10);
        $index2 = rand(0, 10);
        echo "<tr><td>$filteredCars[$x]</td><td>$colors[$index1]</td><td>$amount[$index2]</td></tr><br>";
    }
    echo "</table>";

}