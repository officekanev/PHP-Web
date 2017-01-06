<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    <textarea name="data" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="Color text" />
</form>
<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['data']);
    //$input = 'What a wonderful world!';
    $result = explode(' ', $input);
    for ($x = 0; $x < count($result); $x++) {
        for ($j = 0; $j < strlen($result[$x]); $j++) {
            $char = $result[$x][$j];
            $ascii = ord($char);
            if($ascii % 2 !== 0){ // odd
                echo "<span style='color: blue; size: 20px'>$char</span>" . ' ';
            }else{ // even
                echo "<span style='color: red;size: 20px'>$char</span>" . ' ';
            }

        }
    }
}
?>
</body>
</html>