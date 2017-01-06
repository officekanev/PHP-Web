<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Enter number of yers:&nbsp&nbsp<input type="text" name="years" />
    <input type="submit" name="submit" value="Show costs" />
</form>

<?php
if (isset($_GET['submit'], $_GET['years'])) {
    $input = htmlentities($_GET['years']);


    echo "<table style='border: 1px solid black'>";
    echo "    <th style='border: 1px solid black'><strong>Year</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>Yanuary</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>February</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>March</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>April</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>May</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>June</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>July</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>August</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>September</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>Octomber</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>November</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>December</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>Total</strong></th><br>";

    function generateUnits() {
    $unit = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $charactersLength = count($unit);
    $randomString = '';
    $randomString .= $unit[rand(0, $charactersLength - 1)];
    return $randomString;
    }

    $input = intval($input);
    $intialYear = intval(2016);

    for ($x = 0; $x < $input; $x++) {

        $allYersSpends = intval(0);
        echo "    <tr>";
        echo "<td style='border: 1px solid black'>$intialYear</td>";
        $intialYear--;

        for ($j = 0; $j < 12; $j++)  {
            $units = generateUnits();
            $tenths = generateUnits();
            $hundreds = generateUnits();
            $allNumber = intval($units . $tenths . $hundreds);
            $allYersSpends += $allNumber;

            echo "<td style='border: 1px solid black'>$allNumber</td>";
        }

        echo "<td style='border: 1px solid black'>$allYersSpends</td>";
        echo "</tr><br>";
    }
}
?>
</body>
</html>