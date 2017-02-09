<?php
require "kalendar.html";
if (isset($_GET['date'])){
    $year = $_GET['date'];
    echo "<style>
th, tr,  table{
border: 1px solid black;
text-align: center;
vertical-align: top;
}
table{
    display: inline-block;
    margin-left: 2%;
    margin-top: 1%;
    height: 150px;
}
p{
text-align: center;
display: block;
margin: 0 auto;
font-size: 34px;
font-weight: bold;
margin-top: 2%;
}
</style>";
    echo "<p>$year</p>";
    echo "<hr />";
    for ($i = 1; $i < 13; $i++) {
        $dateString = "$i/1/$year";
        $temp = "$year-$i-1";
        $month = intval(date("t", strtotime($temp)));
        $monthToString = date("F", strtotime($dateString));
        $day = date("D", strtotime($dateString));
        $skip = 0;
        switch ($day) {
            case "Mon";
                $skip = 0;
                break;
            case "Tue";
                $skip = 1;
                break;
            case "Wed";
                $skip = 2;
                break;
            case "Thu";
                $skip = 3;
                break;
            case "Fri";
                $skip = 4;
                break;
            case "Sat";
                $skip = 5;
                break;
            case "Sun";
                $skip = 6;
                break;
            default:
                break;
        }
        $bounus = $skip;
        // echo $day;
        // $skip = 0;
        echo "<table><tr><th colspan='7'>$monthToString</th></tr>";
        echo "<tr><td>MON</td><td>TUE</td><td>WE</td><td>THU</td><td>FRI</td><td>SA</td><td>SU</td></tr>";
        // echo $month;
        $row = 0;
        $line = "<tr>";
        for ($j = 0; $j < $skip; $j++) {
            $line .= "<td></td>";
            $row++;
            if ($row % 7 == 0) {
                $line .= "</tr>";
                $row = 0;
                echo $line;
                $line = "<tr>";
            }
        }
        for ($k = 1; $k < 36; $k++) {
            if ($k <= $month) {
                $skip = 0;
                $row++;
                $line .= "<td>$k</td>";
                if ($row % 7 == 0) {
                    $line .= "</tr>";
                    echo $line;
                    $line = "<tr>";
                }
            } else {
                $line .= "<td>  </td>";
                $row++;
                if ($row % 7 == 0) {
                    $row++;
                    $line .= "</tr>";
                    echo $line;
                    $line = "<tr>";
                }
            }
        }
        echo "</table>";
    }
}
?>