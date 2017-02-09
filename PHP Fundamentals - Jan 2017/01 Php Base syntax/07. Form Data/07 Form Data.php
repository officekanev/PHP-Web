<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>
<form action="">
    Name:&nbsp;<input type="text" name="name"><br>
    Age:&nbsp;&nbsp;&nbsp; <input type="text" name="age"><br>
    <input type="radio" name="gender" value="male">&nbsp;Male<br>
    <input type="radio" name="gender" value="female">&nbsp;Female<br>
    <input type="submit">
</form>


<?php
    if(isset($_GET['name'],$_GET['age'],$_GET['gender'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "My name is {$name}. I am {$age} years old. I am {$gender}.";
    }
?>

</body>
</html>

















































































































