
<form action="" method="GET">
    <textarea name="input" id="" cols="40" rows="2"></textarea><br>
    <input type="submit" name="submit" value="Count words">
</form>
<?php
if (isset($_GET['input']) && !empty(trim($_GET['input']))) {
    $text = trim($_GET['input']);

    $text = strtolower($text);
    $arr = array_map('trim', explode(' ', $text));
    $tokens = preg_split("/\W+/", $text, -1, PREG_SPLIT_NO_EMPTY);
    $countReppeatWord = [];
    foreach ($tokens as $num) {
        if (!array_key_exists($num, $countReppeatWord)) {
            $countReppeatWord[$num] = 0;
        }
        $countReppeatWord[$num]++;
    }

    echo createTable($countReppeatWord);

//    echo "<style>
//    td, tr,  table{
//    border: 1px solid black;
//    background-color: gainsboro;
//    }
//
//    td {
//     font-weight: bold;
//    }
//    </style>";

    function createTable($countReppeatWord){
        $output = '';
        $output .= '<table border="2">';

        foreach ($countReppeatWord as $key => $value){
            $output .= "<tr><td>{$key}</td><td>{$value}</td></tr>";
        }

        $output .= '</table>';
        return $output;
    }
}
?>
