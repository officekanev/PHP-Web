<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcom to your profile </title>
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/united/bootstrap.css">
</head>
<body>
    <div class="container">
        <h1>Welcom <?= $currentUser['first_name'];?> <?= $currentUser['last_name'];?> </h1>
        <img src="<?= $currentUser['picture'];?>"/>
    </div>
</body>
