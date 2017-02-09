<?php
require "Annual Expenses.html";
if (isset($_GET['years'])) {
    $years = $_GET['years'];

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
    echo "<tr><th>Year</th><th>January</th><th>February</th><th>March</th><th>April</th><th>May</th>
<th>June</th><th>July</th><th>August</th><th>September</th><th>November</th><th>December</th><th>Total:</th></tr><br>";
    $startYear = intval(2017);
    for ($x = 0; $x < $years; $x++) {

        $countAmount = intval(0);
        echo "<tr><td>$startYear</td>";
        $startYear--;
        for ($j = 0; $j <= intval(10); $j++) {
            $index = rand(0, 999);
            $countAmount += $index;
            echo "<td>$index</td>";
        }
        echo "<td>$countAmount</td>";
        echo "</tr><br>";

    }
    echo "</table>";
}