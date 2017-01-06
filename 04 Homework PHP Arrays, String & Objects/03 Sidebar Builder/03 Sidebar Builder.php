<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Caregories:<input type="text" name="categories"/><br>
    Tags:<input type="text" name="tags"/><br>
    Months:<input type="text" name="months"/><br>
    <input type="submit" name="submit" value="Generate" />
</form>
<br>
<?php
if (isset($_GET['submit'])) {

    $categor = htmlentities($_GET['categories']);
    $tag = htmlentities($_GET['tags']);
    $month = htmlentities($_GET['months']);

//echo "<style>
//sidebar{
//background-color: skyblue;
//border-radius: 10px;
//width: 150px;
//height: 250px;
//}
//</style>";

//    $categor = 'Knitting, Cycling, Swimning, Dancing';
//    $tag = 'person, free time, love, peace, protest';
//    $month = 'Aprill, May, June, July';

    $categories = explode(', ', $categor);
    $tags = explode(', ', $tag);
    $months = explode(', ', $month);

    echo "<aside style='border: 1px solid black;background-color: skyblue; border-radius: 10px; width: 120px; height: 200px;padding: 5px'>
            <p><strong>Categories</strong></p>
            <hr>
            <ul><br>";
            for ($x = 0; $x < count($categories); $x++) {
                echo "<li><a href=\"\#\">$categories[$x]</a></li>";
            }
            echo '</ul><br>
    </aside><br>';


    echo "<aside style='border: 1px solid black;background-color: skyblue; border-radius: 10px; width: 120px; height: 200px;padding: 5px'>
                <p><strong>Tags</strong></p>
                <hr>
                <ul><br>";
    for ($x = 0; $x < count($tags); $x++) {
        echo "<li><a href=\"\#\">$tags[$x]</a></li>";
    }
    echo '</ul><br>
        </aside><br>';


    echo "<aside style='border: 1px solid black;background-color: skyblue; border-radius: 10px; width: 120px; height: 200px;padding: 5px'>
                <p><strong>Months</strong></p>
                <hr>
                <ul><br>";
    for ($x = 0; $x < count($months); $x++) {
        echo "<li><a href=\"\#\">$months[$x]</a></li>";
    }
    echo '</ul><br>
            </aside><br>';

}
?>
</body>
</html>