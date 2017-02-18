<?php

namespace FamilMember;

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

    public function addMember(Person $person):void
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