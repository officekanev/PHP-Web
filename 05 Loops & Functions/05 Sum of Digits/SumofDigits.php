<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Input string:&nbsp&nbsp<input type="text" name="digits" />
    <input type="submit" name="submit" value="Show result" /><br>
</form>
<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['digits']);
    //$input = '12njh, 3k45k6, *****, #mgdsfls, -, 1a11, 2222, 222%, 3333, 4444, asdf';
    $numbers = explode(', ', $input);

echo "<table style='border: 1px solid black'>";

    for ($x = 0; $x < count($numbers); $x++) {
        $currentDigit = intval($numbers[$x]);

        if($numbers[$x] == 0) {
            if(strlen($numbers[$x]) ===  strlen($currentDigit) && $numbers[$x] == '0'){
                echo "    <tr><td style='border: 1px solid black'>$numbers[$x]</td><td style='border: 1px solid black'>$currentDigit</td><br></tr>";
            }else{
                echo "    <tr><td style='border: 1px solid black'>$numbers[$x]</td><td style='border: 1px solid black'>I cannot sum that</td><br></tr>";
            }
        }else {
            $isRealDigit = true;
            $tempSum = intval(0);
            for ($j = 0; $j < strlen($numbers[$x]); $j++) {
                $tempCharacter = intval($numbers[$x][$j]);

                if($tempCharacter !== 0 && strlen($numbers[$x]) ===  strlen($currentDigit)){
                    $tempSum += $tempCharacter;
                }else{
                    echo "    <tr><td style='border: 1px solid black'>$numbers[$x]</td><td style='border: 1px solid black'>I cannot sum that</td><br></tr>";
                    $isRealDigit = false;
                    break;
                }
            }
            if($isRealDigit){
                echo "    <tr><td style='border: 1px solid black'>$currentDigit</td><td style='border: 1px solid black'>$tempSum</td><br></tr>";
            }
        }
    }
 echo "</table>";
}
?>
</body>
</html>