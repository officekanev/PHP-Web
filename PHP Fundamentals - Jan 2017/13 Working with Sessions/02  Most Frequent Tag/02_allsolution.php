<?php
    session_start();
    if(!isset($_SESSION['tagsCount'])) {
        $_SESSION['tagsCount'] = [];
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <title>Most Frequent tag</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="GET">
    <div class="form">
        <label>Enter tags</label>
        <input type="text" name="input" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    <a href="02_allsolution.php?clear=true">
        <button type="button">Clear</button>
    </a>
</form>

<?php
if(isset($_GET['input'])){
    $input = $_GET['input'];
    $input = explode(', ', $input);

    foreach ($input as $tag) {
        if(array_key_exists($tag, $_SESSION['tagsCount'])){
            $_SESSION['tagsCount'][$tag]++;
        }else{
            $_SESSION['tagsCount'][$tag] = 1;
        }
    }
    
    arsort($_SESSION['tagsCount']);

    //Output
    echo "<ul>";
    foreach ($_SESSION['tagsCount'] as $key => $value){
        echo "<li>$key: $value times</li>";
    }
    echo "</ul><br>";
    //           return of associative arraay -> $key who have max value of all elements
    echo "Most frequent tag is: " .
        array_search(max($_SESSION['tagsCount']), $_SESSION['tagsCount']);
}else{
    $_SESSION['tagsCount'] = [];
}
?>
</body>
</html>
