<?php

namespace Models;


class Company
{
    private $departments = [];

    public function addDepartment(Department $department)
    {
        $this->departments[$department->getName()] = $department;
    }

    public function hasDepartment(string $name): bool
    {
        return array_key_exists($name, $this->departments);
    }

    public function getDepartment(string $name): Department
    {
        if(!array_key_exists($name, $this->departments)){
            throw new \Exception("Department not found!");
        }

        return $this->departments[$name];
    }

    public function getBestPaidDepartment(): Department
    {
        usort($this->departments,
            function (Department $departmentA, Department $departmentB){
            // compare and find department with Max Biggest average salary
                return $departmentA->getAverageSalary() <=> $departmentB->getAverageSalary();
        });

        // return number of reppeats department
        return $this->departments[count($this->departments) - 1];
    }
}