<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>

    <style>

        table,td{
            border: 1px solid black;
            width: 300px;
            padding: 5px 0;
        }

        .description {
            background-color: orange;
        }

    </style>
</head>
<body>
<?php
$data = array('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
$tableRowContent = array('Name','Phone number', 'Age', 'Address');

echo "<table>" . "\xA";

for ($x = 0; $x < count($data); $x++) {
    echo "        <tr>" . "\xA";
    echo "            <td class='description'><strong>{$tableRowContent[$x]}</strong></td><td>{$data[$x]}</td>" . "\xA";
    echo "        </tr>" . "\xA";
}

echo "</table>" . "\xA";
?>
</body>
</html>