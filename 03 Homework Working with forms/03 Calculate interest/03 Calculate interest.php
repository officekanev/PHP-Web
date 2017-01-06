<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Problem03</title>
</head>
<body>
<form action="" method="get">
    <label for="amount">Enter Amount</label>
    <input id="amount" name="amount" type="any" required="required"/><br>
    <input name="currency" type="radio" value="$" id="dollar" required="required"/>
    <label for="dollar">USD</label>
    <input name="currency" type="radio" value="€" id="euro" required="required"/>
    <label for="euro">EUR</label>
    <input name="currency" type="radio" value="лв" id="bg" required="required"/>
    <label for="bg">BGN</label><br>
    <label for="compound">Compound annual interest amount</label>
    <input id="compound" name="compound" type="any" required="required"/><br>
    <select name="dropDown" id="dropDown">
        <option value="6">6 Months</option>
        <option value="12">1 Year</option>
        <option value="24">2 Year</option>
        <option value="60">5 Year</option>
    </select>
    <input type="submit" value="Calculate"/>
</form>

<?php
if (isset ($_GET['amount'], $_GET['currency'], $_GET['compound'], $_GET['dropDown'] )) {

    $amount = htmlentities($_GET['amount']);
    $currency = htmlentities($_GET['currency']);
    $compound= htmlentities($_GET['compound']/ 12);
    $time = htmlentities($_GET['dropDown']);
    $answer = 0;
    for($i =0; $i< intval($time); $i++){
        $amount = $amount + $amount*$compound /100;
    }
    echo "<p>".$currency .number_format($amount, 2)."</p>";
}
?>

</body>
</html>
