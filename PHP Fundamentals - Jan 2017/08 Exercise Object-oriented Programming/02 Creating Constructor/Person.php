<?php

class Person
{
    private $name;
    private $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function __toString()
    {
        return $this->name . " " . $this->age;
    }
}

$name = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$person = new Person($name, $age);
echo $person;


//
//class Person
//{
//
//    public $name;
//    public $age;
//
//    /**
//     * Person constructor.
//     * @param $name
//     * @param $age
//     */
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        echo $this->name . " " . $this->age . "\n";
//    }
//
//    /**
//     * Person constructor.
//     * @param $name
//     * @param $age
//     */
//
//}
//
//$person = new Person('Pesho', 20);
////$person1 = new Person('Gosho', 18);
////$person2 = new Person('Stamat', 43);
//
////echo(count(get_object_vars($person)));