<?php


class Person
{
    private $name;
    private $age;
    private $occupation;

    public function __construct(string $name,
                                int $age,
                                string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function getAge(): int
    {
        return $this->age;
    }

//    /**
//     * @return array
//     */
//    public function getPersons(): array
//    {
//        return $this->persons;
//    }
//
//    public function addPerson(Person $person)
//    {
//        $this->persons[] = $person;
//    }

//    public function sortPerson():Person
//    {
//        usort($this->persons, function (Person $a , Person $b){
//            $a->getAge() <=> $b->getAge();
//        });
//    }

    public function __toString():string
    {
       return "{$this->name} - age: {$this->age}, occupation: {$this->occupation}";
    }
}

$persons = [];

//$inputs = [];
//$inputs[] = 'Gosho 22 Dentist';
//$inputs[] = 'Mimi 13 Student';
//$inputs[] = 'END';
//$count = intval(0);

$line = trim(fgets(STDIN));
//$line = trim($inputs[$count]);

while ($line !== 'END'){
    $data = explode(' ', $line);
    $persons  [] = $person = new Person($data[0], $data[1], $data[2]);
   // $person->addPerson($person);
    //$count++;
   // $line = trim($inputs[$count]);
    $line = trim(fgets(STDIN));
}

usort($persons, function (Person $p1, Person $p2) {
    return $p1->getAge() <=> $p2->getAge();
});

//$person->sortPerson();
echo implode(PHP_EOL, $persons);