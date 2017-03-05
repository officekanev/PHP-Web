<?php
if(isset($_GET['Submit'])) {
    $elemnts = array_filter(explode(", ", trim($_GET['input'])));
    var_dump($elemnts);
}

require_once '01_forntend.php';