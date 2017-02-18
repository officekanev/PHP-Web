<?php

require_once 'Employee.php';

$inputLength = trim(fgets(STDIN));
$employees = [];

for ($x = 0; $x < $inputLength; $x++) {
    $employeeInfo = trim(fgets(STDIN));
    $employeeInfo = explode(' ', $employeeInfo);

    $name = $employeeInfo[0];
    $salary = floatval($employeeInfo[1]);
    $position = $employeeInfo[2];
    $department = $employeeInfo[3];

    if(count($employeeInfo) > 5){
        $email = $employeeInfo[4];
        $age = $employeeInfo[5];
        $employee = new Employee($name, $salary, $position, $department, $email, $age);
    }elseif (count($employeeInfo) > 4){
        if(is_numeric($employeeInfo[4])){
            $age = intval($employeeInfo[4]);
            $employee = new Employee($name, $salary, $position, $department, 'n/a', $age);
        }else{
            $email = $employeeInfo[4];
            $employee = new Employee($name, $salary, $position, $department, $email);
        }
    }else {
        $employee = new Employee($name, $salary, $position, $department);
    }

    $employees[] = $employee;
}

$departments = [];

foreach ($employees as $employee){// count department with max employees
    if(array_key_exists($employee-> getDepartment(), $departments)){
        $departments[$employee->getDepartment()]++;
    }else{
        $departments[$employee->getDepartment()]= 1;
    }
}

$averageSalaries = [];

foreach ($departments as $department => $count){
    $averageSalary = 0;
    foreach ($employees as $employee){
        if($employee->getDepartment() == $department){
            $averageSalary += $employee->getSalary();
        }
    }
    $averageSalary /= $count;
    $averageSalaries[$department] = $averageSalary;
}

//var_dump($averageSalaries);

$highestDepartment = array_search(max($averageSalaries), $averageSalaries);

function orderBySalary($a, $b) {
    return $a->getSalary() < $b->getSalary();
}

usort($employees, "orderBySalary");

echo "Highest Average Salary: " . $highestDepartment . "\r\n";
for ($x = 0; $x < count($employees); $x++) {
    if($employees[$x]->getDepartment() == $highestDepartment){
        if($x != count($employees) - 1){
            echo $employees[$x]->getName() . ' ' . number_format($employees[$x]->getSalary(), 2)
              . ' '  . $employees[$x]->getEmail() . ' ' . $employees[$x]->getAge() . "\r\n";
        }else{
            echo $employees[$x]->getName() . ' ' . number_format($employees[$x]->getSalary(), 2)
                . ' '  . $employees[$x]->getEmail() . ' ' . $employees[$x]->getAge();
        }
    }
}




































































































































