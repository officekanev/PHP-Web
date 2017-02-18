<?php

class Person{

    public $name;
    public $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}

$person = new Person('Pesho', 20);
$person = new Person('Gosho', 18);
$person = new Person('Stamat', 43);

echo(count(get_object_vars($person)));
