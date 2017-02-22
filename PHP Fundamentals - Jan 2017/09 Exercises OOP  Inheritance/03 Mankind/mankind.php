<?php

 class Human{

     private $firstName;
     private $lastName;

     public function __construct(string $firstName,string $lastName)
     {
         $this->setFirstName($firstName);
         $this->setLastName($lastName);
     }

     public function setFirstName(string $firstName)
     {
         $char = $firstName[0];
         if($char != strtoupper($char)){
             throw new Exception("Expected upper case letter!Argument: firstName");
         }elseif (strlen($firstName) < 4){
             throw new Exception("Expected length at least 4 symbols!Argument: firstName");
         }

         $this->firstName = $firstName;
     }

     public function setLastName(string $lastName)
     {
         $char = $lastName[0];
         if($char != strtoupper($char)){
             throw new Exception("Expected upper case letter!Argument: lastName");
         }elseif (strlen($lastName) < 3){
             throw new Exception("Expected length at least 3 symbols!Argument: lastName");
         }

         $this->lastName = $lastName;
     }


     public function __toString():string
     {
         return "First Name: " . $this->firstName  . "\r\n"
           .  "Last Name: " . $this->lastName  . "\r\n";
     }
 }

 class Worker extends Human {

     private $weekSalary;
     private $hoursPerDay;

     public function __construct(string $firstName,
                                 string $lastName,
                                 float $weekSalary,
                                 float $hoursPerDay)
     {
         if(strlen($lastName) < 3){
             throw new Exception("Expected length more than 3 symbols!Argument: lastName");
         }
         parent::__construct($firstName, $lastName);

        $this->setWeekSalary($weekSalary);
         $this->setHoursPerDay($hoursPerDay);
     }

     public function setWeekSalary(float $weekSalary)
     {
         if($weekSalary < 10){
             throw new Exception("Expected value mismatch!Argument: weekSalary");
         }

         $this->weekSalary = $weekSalary;
     }

     public function setHoursPerDay(float $hoursPerDay)
     {
         if($hoursPerDay < 1 || $hoursPerDay > 12){
             throw new Exception("Expected value mismatch!Argument: workHoursPerDay");
         }
         $this->hoursPerDay = $hoursPerDay;
     }

     private function calculateSalaryPerHour():float
     {
         return $this->weekSalary / ($this->hoursPerDay * 7);
     }


//     private function getWeekSalary()
//     {
//         if($this->weekSalary % 1 === 0){
//             return $this->weekSalary . ".00";
//         }
//         return round($this->weekSalary, 2);
//     }
//
//     private function getHoursPerDay()
//     {
//         if($this->hoursPerDay % 1 === 0){
//             return $this->hoursPerDay . ".00";
//         }
//         return round($this->hoursPerDay, 2);
//     }



     public function __toString(): string
     {
         return parent::__toString() . "Week Salary: " . number_format($this->weekSalary, 2, '.','') . "\r\n"
             ."Hours per day: " . number_format($this->hoursPerDay, 2, '.','') . PHP_EOL
             . "Salary per hour: " . round($this->calculateSalaryPerHour(), 2) . "\r\n";
     }
 }

 class Student extends Human {

     private $facultyNumber;

     public function __construct(string $firstName,string $lastName, string $facultyNumber)
     {
         parent::__construct($firstName, $lastName);
         $this->setFacultyNumber($facultyNumber);
     }

     public function setFacultyNumber($facultyNumber)
     {
         if(strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10){
             throw new Exception("Invalid faculty number!");
         }
         $this->facultyNumber = $facultyNumber;
     }

     protected function getFacultyNumber()
     {
         return $this->facultyNumber;
     }

     public function __toString():string
     {
         return parent::__toString() . "Faculty number: {$this->getFacultyNumber()}\r\n"
             . "\r\n";
     }
 }

 try{

     $dataStudent = trim(fgets(STDIN));
     //$dataStudent = trim('Stefo Mk321 0812111');
     $studentelement = explode(' ', $dataStudent);
     $student = new Student($studentelement[0], $studentelement[1], $studentelement[2]);
     echo $student;

     $dataWorker = trim(fgets(STDIN));
     //$dataWorker = trim('Ivcho Ivancov 1590 10');
     $workerelement = explode(' ', $dataWorker);
     $worker = new Worker($workerelement[0], $workerelement[1],
         floatval($workerelement[2]), floatval($workerelement[3]));
     echo $worker;

 }catch (Exception $e){
     echo $e->getMessage();
 }