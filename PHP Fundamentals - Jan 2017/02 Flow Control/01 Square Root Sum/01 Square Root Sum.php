<?php
require "square-root.html";
if (isset($_GET['number'])) {
    $number = $_GET['number'];

    echo "<style>
 tr,  table{
border: 1px solid black;
text-align: center;
vertical-align: top;
}

table{
    display: inline-block;
    margin-left: 2%;
    margin-top: 1%;
    height: 20px;
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

    $multiply = $number * $number;
    echo "<table><tr><td>$number</td><td>$multiply</td></tr>";
    echo "</table>";
}
