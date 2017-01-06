<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Start Index:&nbsp&nbsp<input type="text" name="startindex" />
    End:&nbsp&nbsp<input type="text" name="endindex" />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if (isset($_GET['submit'], $_GET['startindex'], $_GET['endindex'])) {
    $start = htmlentities($_GET['startindex']);
    $end = htmlentities($_GET['endindex']);

    $start = intval($start);
    $end = intval($end);

    function isPrime($num) {
        //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
        if($num == 1)
            return false;

        //2 is prime (the only even number that is prime)
        if($num == 2)
            return true;

        /**
         * if the number is divisible by two, then it's not prime and it's no longer
         * needed to check other even numbers
         */
        if($num % 2 == 0) {
            return false;
        }

        /**
         * Checks the odd numbers. If any of them is a factor, then it returns false.
         * The sqrt can be an aproximation, hence just for the sake of
         * security, one rounds it to the next highest integer value.
         */
        $ceil = ceil(sqrt($num));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($num % $i == 0)
                return false;
        }

        return true;
    }

    for ($x = $start; $x <= $end; $x++) {
        $check = isPrime($x);

        if($check){
            echo $x . ", ";
        }

    }
}
?>
</body>
</html>