<!DOCTYPE html>
<html>
<head>
    <title>GET Request</title>
</head>
<body>
<form method="get">
    Enter Tags:<br>
    <input type="text" name="name" />
    <input type="submit" name="submit" />
</form>

<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['name']);
    //$input = 'Pesho, homework, homework, exam, course, PHP';
    $result = array_count_values(explode(', ', $input));
    arsort($result);
    $count = 0;
    $mostFrequent = '';
    while (list($key, $val) = each($result)) {
        if($count == 0){
            $mostFrequent = 'Most Frequent Tag is: ' . $key;
            $count++;
        }
        echo "$key : $val times" . "<br>";
    }
    echo "<br>";
    echo $mostFrequent;
}
?>
</body>
</html>