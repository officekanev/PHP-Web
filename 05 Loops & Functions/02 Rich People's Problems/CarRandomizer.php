<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Enter cars&nbsp&nbsp<input type="text" name="cars" />
    <input type="submit" name="submit" value="Show result" />


</form>
<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['cars']);

    //$input = 'Mitsubishi, Maseratti, Mayback';
    $carsModel = explode(', ', $input);

    echo "<table style='border: 1px solid black'>";
    echo "    <th style='border: 1px solid black'><strong>Car</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>Color</strong></th><br>";
    echo "    <th style='border: 1px solid black'><strong>Count</strong></th><br>";

    function generateRandomColor() {
        $colors = array('red', 'blue', 'yellow', 'pink', 'sky', 'blue', 'black', 'white', 'cyan', 'orange');
        $charactersLength = count($colors);
        $randomString = '';
        $randomString .= $colors[rand(0, $charactersLength - 1)];
        return $randomString;
    }

    function generateRandomAmount() {
        $amountt = array('1', '2', '3', '4', '5');
        $charactersLength = count($amountt);
        $randomString = '';
        $randomString .= $amountt[rand(0, $charactersLength - 1)];
        return $randomString;
    }

    for ($x = 0; $x < count($carsModel); $x++) {
        $color = generateRandomColor();
        $amountt = generateRandomAmount();

        echo "    <tr><td style='border: 1px solid black'>$carsModel[$x]</td><td style='border: 1px solid black'>$color</td><td style='border: 1px solid black'>$amountt</td></tr>" . "<br>";
    }
    echo "</table>";

}
?>
</body>
</html>