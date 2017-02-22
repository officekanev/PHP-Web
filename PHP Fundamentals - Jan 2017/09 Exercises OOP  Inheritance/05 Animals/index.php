<?php

class Animal{

    private $name;
    private $age;
    private $gender;

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        $this->name = $name;
        $this->setAge($age);
        $this->gender = $gender;
    }

    public function setAge(int $age)
    {
        if($age < 0){
            throw new Exception("Invalid input!");
        }

        $this->age = $age;
    }

    function __toString():string
    {
        $output = $this->name . " " . $this->age . " ";
        $output .= $this->gender . PHP_EOL;

        return $output;
    }
}

class Dog extends Animal {

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        parent::__construct($name, $age, $gender);
    }
}

class Frog extends Animal {

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        parent::__construct($name, $age, $gender);
    }
}

class Cat extends Animal {

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        parent::__construct($name, $age, $gender);
    }
}

class Kittens extends Cat {

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        parent::__construct($name, $age, $gender);
    }
}

class Tomcat extends Cat {

    public function __construct(string $name,
                                int $age,
                                string $gender)
    {
        parent::__construct($name, $age, $gender);
    }
}

class Sound {

    public static function dogSound(){
        return "BauBau";
    }

    public static function catSound(){
        return "MiauMiau" . PHP_EOL;
    }

    public static function frogSound(){
        return "Frogggg" . PHP_EOL;
    }

    public static function kittensSound(){
        return "Miau" . PHP_EOL;
    }

    public static function tomcatSound(){
        return "Give me one million b***h" . PHP_EOL;
    }
}

try{
//    $input = [];
//    $input[] = 'Frog';
//    $input[] = 'Sashky -12 Male';
//$input[] = 'Dog';
//$input[] = 'Sharo 132 Male';
//    $input[] = 'Beast!';
//
//    $count = 0;

    while (true){
        $animal = trim(fgets(STDIN));
        //$animal = trim($input[$count]);
        if($animal === 'Beast!'){
            break;
        }
        //$animal = trim(fgets(STDIN));
        //$animal = trim('Cat');

        $line = trim(fgets(STDIN));
        //$line = trim($input[$count + 1]);

        $data = explode(' ', $line);
        if(count($data) < 3){
            echo 'Invalid input!';
            continue;
        }

        $name = $data[0];
        $age = intval($data[1]);
        $gender = $data[2];
        switch ($animal){
            case 'Cat' :
                $animal = new Cat($name, $age, $gender);
                $output = "Cat ";
                $output .= $animal->__toString();
                echo $output;
                echo Sound::catSound();
                break;
            case 'Dog' :
                $animal = new Dog($name, $age, $gender);
                $output = "Dog ";
                $output .= $animal->__toString();
                echo $output;
                echo Sound::dogSound();
                break;
            case 'Frog' :
                $animal = new Frog($name, $age, $gender);
                $output = "Frog ";
                $output .= $animal->__toString();
                echo $output;
                echo Sound::frogSound();
                break;
            case 'Kittens' :
                $animal = new Kittens($name, $age, $gender);
                $output = "Kittens ";
                $output .= $animal->__toString();
                echo $output;
                echo Sound::catkittensSoundSound();
                break;
            case 'Tomcat' :
                $animal = new Tomcat($name, $age, $gender);
                $output = "Tomcat ";
                $output .= $animal->__toString();
                echo $output;
                echo Sound::catSound();
                break;
        }
        $count+=2;
    }
}catch (Exception $e){
    echo $e->getMessage();
}






















































