<?php

//$db = new PDO("mysql:host=localhost;dbname=sex;charset=utf8", "root", "");
require_once 'app.php';

if(isset($_POST['login'])){
    $username = $_POST['nickname'];
    $password = $_POST['password'];

    $query = "SELECT
	id,
	password
FROM
	people
WHERE
	nickname = ?";

    $stmt = $db->prepare($query);// check whether semantic if query - request in correct write
    $stmt->execute(
        [
            $username
        ]
    );

    //this return asociative array who keep id & password ^ nothing is no consist data
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user){
        throw new Exception("No such nickname");
    }

    // if last_wrong_pass - now() < 10
    // sorry :(

    $passwordHash = $user['password'];
    //var_dump( $_SESSION['user_id']);
    //var_dump( $_SESSION['id']);
    if(password_verify($password, $passwordHash)){//check wether password match with decripted pw-hash
        $_SESSION['user_id'] = $user['id'];//$_SESSION - this is current session
        header("Location: profile.php");// redirect in to file profile
        exit;
    }

    //UPDATE last_Wrong_pass = NOW()
    throw new Exception("Password mismatch!");
}
include 'login_frontend.php';