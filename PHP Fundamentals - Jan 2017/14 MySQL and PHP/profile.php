<?php
require_once 'app.php';
if(!isset($_SESSION['user_id'])){// if in $_SESSION data no have key user_id
    throw new Exception("This page is restricted to logged in user");
}

//var_dump($_SESSION);

$query = "SELECT first_name, last_name, picture FROM people
WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->execute(
    [
        $_SESSION['user_id']
    ]
);
$currentUser = $stmt->fetch(PDO::FETCH_ASSOC);

include 'profile_frontend.php';

echo "you are logged";
//var_dump($_SESSION);