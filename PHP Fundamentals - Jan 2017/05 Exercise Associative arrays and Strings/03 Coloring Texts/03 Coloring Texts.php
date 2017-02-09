<form action="">
    <div>
        <textarea name="input" id="input" cols="30" rows="3" title="input"></textarea>
    </div>
    <div>
        <input type="submit" value="Count words">
    </div>
</form>
<?php
if (isset($_GET["input"]) && !empty(trim($_GET["input"]))) {
    $text = trim($_GET["input"]);
    //$text = trim('What a wonderful world!');
    for ($ch = 0; $ch < strlen($text); $ch++) {
        if (!empty(trim($text[$ch]))) {
            $letter = colorize($text[$ch]);
            echo "{$letter}";
        }
    }
}
function colorize($item) {
    $color = ord($item) % 2 == 0 ? "red" : "blue";
    // <font> is deprecated HTML element, do not use it in real projects!
    return "<font color='{$color}'>{$item} </font>";
}







//if (isset($_GET["input"]) && !empty(trim($_GET["input"]))) {
//    $text = trim($_GET["input"]);
//    $text = trim('What a wonderful world!');
//
//    echo buildTable($text);
//}
//function buildTable($items) {
//    $output = "";
//    for ($x = 0; $x < strlen($items); $x++) {
//        $curentchar = $items[$x];
//        if($curentchar !== " "){
//            $ascii = ord($curentchar);
//            if($ascii % 2 !== 0){
//                $output .= "<font color='blue'>{$curentchar}</font>";
//            }else{
//                $output .= "<font color='red'>{$curentchar}</font>";
//            }
//        }
//    }
//    return $output;
//}