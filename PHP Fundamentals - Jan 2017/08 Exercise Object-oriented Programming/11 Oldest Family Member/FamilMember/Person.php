<?php

namespace FamilMember;

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