<?php
use Models\Company;
use Models\Department;
use Models\Employee;
                                    // $className = Models/Department
spl_autoload_register(function (string $className){
    require_once "{$className}.php"; // this nasochva create new element in to  correct Class to create him
});

$company = new Company();

//$count = intval(trim(fgets(STDIN)));
$count = intval(trim(6));

$inputt = [];
$inputt[] = "Stanimir 496.37 Temp Coding stancho@yahoo.com";
$inputt[] = "Yovcho 610.13 Manager Sales";
$inputt[] = "Toshko 609.99 Manager Sales toshko@abv.bg 44";
$inputt[] = "Venci 0.02 Director BeerDrinking beer@beer.br 23";
$inputt[] = "Andrei 700.00 Director Coding";
$inputt[] = "Popeye 13.3333 Sailor SpinachGroup popeye@pop.ey";

for ($i = 0; $i < $count; $i++) {
    $input = explode(" ", trim($inputt[$i]));

    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $departmentName = $input[3];
    $email = null;
    $age = null;

    if (isset($input[4])) {
        if (is_numeric($input[4])) {
            $age = intval($input[4]);
        } else {
            $email = $input[4];
        }
    }

    if (isset($input[5])) {
        if (is_numeric($input[5])) {
            $age = intval($input[5]);
        }
    }
          //  $company = new Company();
          // this is function who check whether private $departments = []; contains comp-name
    if (!$company->hasDepartment($departmentName)) {
        $department = new Department($departmentName);// go to class Depart to create this object
        $company->addDepartment($department);// add depart name  in to colection private $departments = [];
    }

    $department = $company->getDepartment($departmentName);
    $employee = new Employee($name, $salary, $position, $department, $email, $age);
    $department->hireEmployee($employee);
}

$bestPaidDepartment = $company->getBestPaidDepartment();
echo "Highest Average Salary: {$bestPaidDepartment->getName()}" . PHP_EOL;
echo $bestPaidDepartment;