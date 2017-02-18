<?php

class Family
{
    /**
     * @var Person[]
     */
    public $people = [];

    /**
     * @var Person
     */
    private $oldestMember = null;

    public function addMember(Person $person)
    {
        $this->people[] = $person;
        if($this->oldestMember == null || $person->getAge() > $this->oldestMember->getAge()){
            $this->oldestMember = $person;
        }
    }

    public function getOldestMember(): Person
    {
        return $this->oldestMember;
    }
}

class Person
{
    public $name;
    public $age;


    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge():int
    {
        return $this->age;
    }

    public function __toString():string
    {
        return "{$this->name} {$this->age}";
    }
}

$family = new Family();

//$inputLines = fgets(STDIN);
$inputLines = 5;
$input = [];
$input[] = 'Steve 10';
$input[] = 'Christopher 15';
$input[] = 'Annie 4';
$input[] = 'Ivan 35';
$input[] = 'Maria 34';

for ($x = 0; $x <  $inputLines; $x++) {
    //$currentPerson = trim(fgets(STDIN));
    $currentPerson = trim($input[$x]);
    $data = explode(' ', $currentPerson);
    $name = $data[0];
    $age = intval($data[1]);
    $person = new Person($name, $age);
    $family->addMember($person);
}

echo $family->getOldestMember();