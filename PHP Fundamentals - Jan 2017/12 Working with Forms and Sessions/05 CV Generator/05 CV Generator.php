// this buld table with content
<?php
require "temp.html";
if (isset($_GET['firstName'], $_GET['lastName'], $_GET['email'], $_GET['phone'], $_GET['sex'],
    $_GET['nationality'], $_GET['companyName'], $_GET['from'], $_GET['to'],
    $_GET['pcLanguage'], $_GET['programmingLanguage'], $_GET['language'], $_GET['spoken'], $_GET['reading'],
    $_GET['writing'], $_GET['drive'], $_GET['birthDate'])){

    $firstName = htmlentities($_GET['firstName']);
    $lastName = htmlentities($_GET['lastName']);
    $email = htmlentities($_GET['email']);
    $phone = htmlentities($_GET['phone']);
    $sex = htmlentities($_GET['sex']);
    $birthDate = $_GET['birthDate'];
    $nationality = htmlentities($_GET['nationality']);
    $companyName = htmlentities($_GET['companyName']);
    $dateFrom = htmlentities($_GET['from']);
    $dateTo = htmlentities($_GET['to']);
    $pcLanguage = $_GET['pcLanguage']; //array
    $programmingLanguage = $_GET['programmingLanguage']; //array
    $language = $_GET['language']; //array
    $spoken = $_GET['spoken']; //array
    $reading = $_GET['reading']; // array
    $writing = $_GET['writing']; //  $spoken = $_GET['spoken']; //array
    $drive = $_GET['drive'];
    echo "<style>
td, th, tr{
border: 1px solid black;
}
</style>";
    echo "<h1>CV</h1>";
    echo "<table>
    <tr><td colspan='2' style='font-weight: bold'align='center'>Personal Information</td></tr>
    <tr><td>First Name</td><td>$firstName</td></tr>
    <tr><td>Last Name</td><td>$lastName</td></tr>
    <tr><td>Email</td><td>$email</td></tr>
    <tr><td>Phone</td><td>$phone</td></tr>
    <tr><td>Gender</td><td>$sex</td></tr>
    <tr><td>Birth Date</td><td>$birthDate</td></tr>
    <tr><td>Nationality</td><td>$nationality</td></tr>
</table>
<br />
<table>
   <tr><td colspan='2' style='font-weight: bold'align='center'>Last Work Position</td></tr>
     <tr><td>Company Name</td><td>$companyName</td></tr>
      <tr><td>From</td><td>$dateFrom </td></tr>
       <tr><td>To</td><td>$dateTo</td></tr>
</table>
<br />
<table>
   <tr><td colspan='2' style='font-weight: bold'align='center'>Computer Skills</td></tr>
     <tr><td>Language</td><td>Skill Level</td></tr>";
    for($i = 0;  $i<count($pcLanguage); $i++){
        echo" <tr><td>$pcLanguage[$i]</td><td>$programmingLanguage[$i]</td></tr>";
    }
    echo"</table> <br>";
    echo "<table>
   <tr><td colspan='4' style='font-weight: bold'align='center'>Other Skills</td></tr>
     <tr><td>Language</td><td>Compareson</td><td>Reading</td><td>Writing</td></tr>";
    for($k=0; $k <count($language); $k++ ){
        echo "<tr><td>$language[$k]</td><td>$spoken[$k]</td><td>$reading[$k]</td><td>$writing[$k]</td></tr>";
    }
    if(count($drive)== 1){
        echo "<tr><td>Driver's license</td><td colspan='3'>$drive[0]</td></tr>";
    }
    if(count($drive)== 2) {
        echo "<tr><td>Driver's license</td><td colspan='3'>$drive[0], $drive[1]</td></tr>";
    }
    if(count($drive)==3){
        echo "<tr><td>Driver's license</td><td colspan='3'>$drive[0], $drive[1], $drive[2]</td></tr>";
    }
    echo "</table>";
}
else{
    echo "wrong input";
}
?>