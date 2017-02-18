<?php
namespace Models;

class Employee
{

    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $department
     * @param null $email
     * @param null $age
     */
    public function __construct($name,
                                $salary,
                                $position,
                                $department,
                                $email = null,
                                $age = null)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    public  function getSalary(): float
    {
        return $this->salary;
    }

    public function __toString(): string
    {
        $salary = number_format($this->salary, 2);
        $email = $this->email == null ? "n/a" : $this->email;
        $age = $this->age == null ? -1 : $this->age;

        return "{$this->name} {$salary} {$email} {$age}";
    }
}