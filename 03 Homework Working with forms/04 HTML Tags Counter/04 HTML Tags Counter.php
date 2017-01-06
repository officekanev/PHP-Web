<?php
require "index.html";
session_start();
$string = $_GET['data'];
$counter = 0;
$_SESSION['tags'] = array();
if(isset ($_GET['data'])){
    if($string != strip_tags($string)) {
        echo "<p><strong>Valid HTML TAG!</strong></p>";
        $_SESSION["count"]= $_SESSION["count"]+1;
        echo "<p>"."Score:".$_SESSION["count"]."</p>";
        array_push($_SESSION['tags'], $string);
    }
    else{
        echo "<p><strong>Invalid HTML TAG!</strong></p>";
    }
}
?>
