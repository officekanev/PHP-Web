<form action="">
    <input type="text" name="first_name"/>
    <input type="submit" value="Търси!" name="search"/>
</form>

<?php

if(isset($_GET['search'])) {
    $firstName = $_GET['first_name'];// return matchin name who we take of the input
                                  // form 'search & check for match name in to data -people
           // PDO  - PHP Database Object
    $db = new PDO("mysql:host=localhost;dbname=sex;charset=utf8", "root","");
    //$stmt = $db->query("SELECT * FROM people WHERE first_name='$firstName'");//query is == Post request
    $stmt = $db->prepare("SELECT * FROM people WHERE first_name= ?");//prepare alowed to use ? in to request
    $argumentsToDatabase = [$firstName];
    $stmt->execute($argumentsToDatabase);// check in to database to consisting people with == $firstname
    $person = $stmt->fetch(PDO::FETCH_ASSOC);//fetch take only returned associative array who return $stmt
    //var_dump($person);                     // $stmt -> array
}


//$db = new PDO("mysql:host=localhost;dbname=sex;charset=utf8", "root","");
//$stmt = $db->query("SELECT * FROM people"); // with $stmt -take all content of the table people
//var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));//FETCH_ASSOC - return only associative array

//$stmt = $db->query("SELECT * FROM people WHERE first_name='Pesho'");//request who return dat only for pers name is 'Pesho'
//$person = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($person);

//foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
//    echo "<h1>" . $row['first_name']. ' - ' . $row['email'] . "</h1>"; // print only first_name & email of all people
//}