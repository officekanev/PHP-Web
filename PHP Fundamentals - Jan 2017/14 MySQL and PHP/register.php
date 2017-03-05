<?php

//$db = new PDO("mysql:host=localhost;dbname=sex;charset=utf8", "root", "");
require_once 'app.php';

if(isset($_POST['register'])) { // thats mean someon new is create profile
    $birthday = new DateTime($_POST['birthday']);
    $interval = $birthday->diff(new DateTime('now'));
    if($interval->y < 18){                           // check age for 18 years
        throw new Exception('Underaged not allowed');
    }

    if($_POST['password'] != $_POST['confirm']){  // check password is match
        throw new Exception('Password missmatch');
    }
                                     // heshira & criptyra password
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $dataForDb = $_POST;// extract all dat who is send in to input form
    unset($dataForDb['register']); // remove  input field data who we no put in to base
    unset($dataForDb['confirm']);  // remove  input field data who we no put in to base
    //var_dump($dataForDb);
    //var_dump($_FILES);
    $dataForDb['avatar'] = null;
    $avatarInfo = $_FILES['avatar']; // avatar this is name of variable who keep all properties about IMG-a
    if(!empty($avatarInfo['name'])) {   //   name, type, tmp_name, error, size
        $fileName = $avatarInfo['name'];
        if( $avatarInfo['type'] != 'image/png'){
            throw new Exception("Not supported file format");
        }
        if($avatarInfo['size'] > 3500000){
            throw new Exception("File too big");
        }

        $path = 'images_avatars/' . uniqid() . '_' . $fileName;// destination for save img-s
       //if all data about avatar-img is correct we upload img in to given folder with img-s
        $result =  move_uploaded_file(
            $avatarInfo['tmp_name'],
            $path
        );

        $dir = basename(__DIR__);//'14 MySQL and PHP/images_avatars/58bacc3a381d3_15-peperuda.jpg'

        if($result !== false){
            $dataForDb['avatar'] =
                '/' . $dir . '/' . $path;//$path = 'images_avatars/' . uniqid() . '_' . $fileName;
        }
    }
            // insert request to putt data in to db - people
    $query = "INSERT INTO people(
    first_name,
    last_name,
    nickname,
    email,
    phone,
    password,
    gender_id,
    born_on,
    sexual_orientation_id,
    country_id,
    city_id,
    description,
    picture
    ) VALUES (
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?,
        ?
    );";

     $dataForDb = array_values($dataForDb);// take only values  & create associative  array
     $stmt = $db->prepare($query);// prepare request $query for upload in to DB
     $result = "";
     if($stmt->execute($dataForDb)){// if $query - data is filled correct in to DB - people
         //echo "<h1>Success</h1>";
         $result = "Success";
     }else{
        // echo "<h2>Sorry :(</h2>";
         $result = "Sorry :(";
     }

    //var_dump($dataForDb);
}


$stmt = $db->prepare("SELECT id, name FROM genders ORDER BY name");
$stmt->execute();
$genders = $stmt->fetchAll(PDO::FETCH_ASSOC);// this result is foreach in frontend code

$stmt = $db->prepare("SELECT id, name FROM cities ORDER BY name");
$stmt->execute();
$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);// this result is foreach in frontend code

$stmt = $db->prepare("SELECT id, name FROM countries ORDER BY name");
$stmt->execute();
$countries = $stmt->fetchAll(PDO::FETCH_ASSOC);// this result is foreach in frontend code

$stmt = $db->prepare("SELECT id, name FROM sexual_orientations ORDER BY id");
$stmt->execute();
$orientations = $stmt->fetchAll(PDO::FETCH_ASSOC);// this result is foreach in frontend code

include 'register_frontend.php';