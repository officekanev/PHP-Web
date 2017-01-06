<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text</title>
</head>
<body>
<form method="get">
    Text:<input type="text" name="text"/><br>
    Banlist:<input type="text" name="banlist"/><br>
    <input type="submit" name="submit" value="Replace Text" />
</form>
<?php
if (isset($_GET['submit'])) {
    $input = htmlentities($_GET['text']);
    $ban = htmlentities($_GET['banlist']);

    //$input = 'It is not Linux, it is GNU/Linux. Linux is merely the kernel, while GNU adds the functionality. Therefore we owe it to them by calling the OS GNU/Linux! Sincerely, a Windows client';
    //$ban = 'Linux, Windows';
    $bann = explode(', ', $ban);
    for ($x = 0; $x < count($bann); $x++) {
        $pattern = $bann[$x];
        $replacement = str_repeat("*", strlen($pattern));
        $input = str_replace($pattern, $replacement, $input);
    }

    echo $input;
}
?>
</body>
</html>