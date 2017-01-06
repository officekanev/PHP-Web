<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>

    <style>
        /*.table*/
            /*border: 1px solid black;*/
        /*}*/

        .musaka {
            background-color: orange;
        }

        td {
            border: 1px solid black;
            margin: 0;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php
$data = array('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
$tablecontent = array('Name', 'Phone number', 'Age', 'Address');

echo '<table class="table">'. "\xA";
echo '    <tbody>'. "\xA";
for ($x = 0; $x < count($data); $x++) {
    echo '        <tr>'. "\xA";
    echo '            <td class="musaka">'.$tablecontent[$x].'</td>'. "\xA";
    echo '            <td>'.$data[$x].'</td>'. "\xA";
    echo '        </tr>'. "\xA";
}
echo '    </tbody>'. "\xA";
echo '</table>'. "\xA";
?>
</body>
</html>



//<?php
//    $name = 'Gosho';
//    $phone = '0882-321-423';
//    $age = 24;
//    $adress = 'Hadji Dimitar';

//    $data = array('Gosho', '0882-321-423', 24, 'Hadji Dimitar');
//    $tablecontent = array('Name', 'Phone number', 'Age', 'Address');
//
//    echo '<table class="table">'. "\xA";
//    echo '    <tbody>'. "\xA";
//    for ($x = 0; $x < count($data); $x++) {
//        echo '        <tr>'. "\xA";
//        echo '            <td class="musaka">'.$tablecontent[$x].'</td>'. "\xA";
//        echo '            <td>'.$data[$x].'</td>'. "\xA";
//        echo '        </tr>'. "\xA";
//    }
//    echo '    </tbody>'. "\xA";
//    echo '</table>'. "\xA";


//    foreach($rows as $row) {
//
//        foreach($columns as $column) {
//            echo '<td>'.$row[$column].'</td>';
//        }
//        echo '</tr>';
//    }
   // echo '</tbody></table>';

//$lines = preg_split('~\s*[\r\n]+\s*~', file_get_contents('prod.txt'));
//
//foreach($lines as $i => $line) {
//    $pairs = explode(';', $line);
//    foreach($pairs as $pair) {
//        list($column, $value) = explode('=', $pair, 2);
//        $columns[$column] = true;
//        $rows[$i][$column] = $value;
//    }
//}
//
//$columns = array_keys($columns);
//
//
//echo '<table><thead><tr>';
//
//foreach($columns as $column) {
//    echo '<th>'.$column.'</th>';
//}
//
//echo '</tr></thead><tbody>';

//?>