<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
                                                THIS IS MY DECISION
</head>
<body>
<form method="get">
    <textarea name="data" id="" cols="30" rows="10"></textarea><br>
    <input type="text" name="targetword"/><br>
    <input type="submit" name="submit" value="Extrackt sentence" />
</form>
<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['data']);
    $targetword = htmlentities($_GET['targetword']);
//    $input = 'This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)';
//    $targetword = 'is';
     $pattern = '/([a-zA-Z ]+'.$targetword.'[a-zA-Z ]+[!\.])/';
     $result = array();
if(preg_match_all($pattern, $input, $matches, PREG_PATTERN_ORDER)){
    array_push($result, $matches[0][0]);
    array_push($result, $matches[0][1]);
}
    for ($x = 0; $x < count($result); $x++) {
        echo $result[$x]. "<br>";
    }
}
?>
</body>
</html>





                                                         <!--VAR    2 NOT WORKING-->

<?php
//header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("utf-8");
//?>
<!--<!DOCTYPE html>-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--    <title>Sentence Extractor</title>-->
<!--    <style type="text/css">-->
<!--        .error {-->
<!--            color: #ff0000;-->
<!--            font-weight: bold;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<form method="post">-->
<!--    <label for="text">Text: </label>-->
<!--    <textarea name="text" id="text" rows="4" cols="50"></textarea><br/>-->
<!--    <label for="word">Word: </label>-->
<!--    <input type="text" name="word" id="word"/><br/>-->
<!--    <input type="submit" value="Extract sentences"/>-->
<!--</form>-->
<!--<br/>-->
<?php
//if (isset($_POST["text"]) && isset($_POST["word"])) {
//    if (!empty($_POST["text"]) && !empty($_POST["word"])) {
//        $sentences = preg_split('/\s*(?<=[.?!])\s+/', $_POST["text"], 0, PREG_SPLIT_NO_EMPTY);
//        foreach ($sentences as $sentence) {
//            $sentence = trim($sentence);
//            if (preg_match('/(\s+)' . $_POST["word"] . '\1(.*)[.?!]/', $sentence)) {
//                echo $sentence . "<br />";
//            }
//        }
//    } else {
//        echo "<div class=\"error\">Not all fields have been filled in.</div>";
//    }
//}
//?>
<!--</body>-->
<!--</html>-->






























