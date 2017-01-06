<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    <textarea name="data" id="" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="Replace URL" />
</form>
<?php
if (isset($_GET['submit'], $_GET['data'])) {
    $input = htmlentities($_GET['data']);
    //$input = '<p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>';
    $replacementTarget = array("<a href=\"", "\">", "</a>", "<p>", "</p>");
    $replaceText   = array("[URL=", "]", "[/URL]", "<\\p>", "<\/p>");
    $newphrase = str_replace($replacementTarget, $replaceText, $input);
        echo $newphrase;
}
?>
</body>
</html>




<!--   NOT WORKING  -->

<?php
//header("Content-Type: text/html; charset=utf-8");
//mb_internal_encoding("utf-8");
//?>
<!--<!DOCTYPE html>-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--    <title>URL Replacer</title>-->
<!--    <style type="text/css">-->
<!--        .error {-->
<!--            color: #ff0000;-->
<!--            font-weight: bold;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<form method="post">-->
<!--    <label for="text">Text: </label><br/>-->
<!--    <textarea name="text" id="text" rows="4" cols="50"></textarea><br/>-->
<!--    <input type="submit" value="Extract sentences"/>-->
<!--</form>-->
<!--<br/>-->
<?php
//if (isset($_POST["text"])) {
//    if (!empty($_POST["text"])) {
//        $text = preg_replace('/<\s*\/\s*a\s*>/', '[/URL]', $_POST["text"]);
//        echo htmlentities(preg_replace('/<a(.*?)href=(\'|")([^>]+)(\'|")(.*?)>/', '[URL=\3]', $text));
//    } else {
//        echo "<div class=\"error\">No text provided.</div>";
//    }
//}
//?>
<!--</body>-->
<!--</html>-->