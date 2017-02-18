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
        return $this->name . " - " . $this->age;
    }
}

$lines = intval(trim(5));
//$lines = intval(trim(fgets(STDIN)));
$input = [];
$input[] = "Nikolai 33";
$input[] = "Yordan 88";
$input[] = "Tosho 22";
$input[] = "Lyubo 44";
$input[] = "Stanislav 11";
/**
 * @var Person[]
 */
$persons = [];

for ($x = 0; $x < $lines; $x++) {
    //$line = explode(" ", trim(fgets(STDIN)));
    $line = explode(" ", trim($input[$x]));

    $name = $line[0];
    $age = intval($line[1]);

    $persons[] = new Person($name, $age);
}
// filter persons by age min 30 years old
$filteredPerson = array_filter($persons, function (Person $person){
    return $person->getAge() > 30;
});

usort($filteredPerson, function (Person $personA, Person $personB){
    return $personA->getName() <=> $personB->getName();
    //return $personB->getName() - $personA->getName();
});

foreach ($filteredPerson as $person){
    echo $person . PHP_EOL;//new line
}