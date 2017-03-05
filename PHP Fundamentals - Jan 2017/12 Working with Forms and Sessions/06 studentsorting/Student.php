<?php

class Student
{
    private $firstname;
    private $lastname;
    private $email;
    private $examscore;

    public function __construct(string $firstname,
                                string $lastname,
                                string $email,
                                int $examscore)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->examscore = $examscore;
    }

    //Geters
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getExamscore(): int
    {
        return $this->examscore;
    }
}