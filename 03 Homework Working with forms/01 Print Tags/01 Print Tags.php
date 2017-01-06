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

<div name="result"></div>

<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['name']);
    $data = preg_split("/[, ]+/", $input);
    for ($x = 0; $x < count($data); $x++) {
        echo $x . " : " . $data[$x] . '<br>';
    }
}
?>
</body>
</html>