<?php


class Employee
{

    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;
    private $departments = [];

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     * @param $position
     * @param $department
     * @param $email
     * @param $age
     */
    public function __construct(string $name,
                                float $salary,
                                string $position,
                                string $department,
                                string $email = 'n/a',
                                int $age = -1)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    //geters
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

}
















































































