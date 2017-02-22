<?php

class Cat{

    private $name;

    public function  __construct($name)
    {
        $this->name = $name;
    }

    function __toString():string
    {
        $output = $this->name;
        return $output;
    }
}

class Siamese extends Cat {

    private $earSize;

    public function __construct(string $name, string $earSize)
    {
        parent::__construct($name);
        $this->earSize = $earSize;
    }

    function __toString(): string
    {
        $output = "Siamese ";
        $output .= parent::__toString();
        $output .= " {$this->earSize}" . PHP_EOL;
        return $output;
    }
}

class Cymric  extends Cat {

    private $furLength;

    public function __construct(string $name, string$furLength)
    {
        parent::__construct($name);
        $this->furLength = $furLength;
    }

    function __toString(): string
    {
        $output = "Cymric ";
        $output .= parent::__toString();
        $output .= " {$this->furLength}" . PHP_EOL;
        return $output;
    }
}

class StreetExtraordinaire  extends Cat {

    private $streetExtraordinaire;

    public function __construct(string $name, string $streetExtraordinaire)
    {
        parent::__construct($name);
        $this->streetExtraordinaire = $streetExtraordinaire;
    }

    function __toString(): string
    {
        $output = "StreetExtraordinaire ";
        $output .= parent::__toString();
        $output .= " {$this->streetExtraordinaire}" . PHP_EOL;
        return $output;
    }
}

$count = 0;
$input = [];
$input[] = 'StreetExtraordinaire Koti 80';
$input[] = 'StreetExtraordinaire Maca 100';
$input[] = 'Cymric Tim 31';
$input[] = 'End';
$input[] = 'Maca';

try{

    //$line = trim(fgets(STDIN));
    $line = trim($input[$count++]);

    $streeExtraor = '';
    $streeExtraorname = '';
    $syamese = '';
    $syamesename = '';
    $cymric = '';
    $cymricname = '';

    while (true){

        if($line === 'End'){
            break;
        }

        $data = explode(' ', $line);
        $kind = $data[0];
        $name = $data[1];
        $operation = $data[2];


        if ($kind === 'StreetExtraordinaire'){
            $streeExtraor = new StreetExtraordinaire($name, $operation);
            $streeExtraorname = $name;
        }elseif ($kind === 'Siamese'){
            $syamese = new Siamese($name, $operation);
            $syamesename = $name;
        }elseif ($kind === 'Cymric'){
            $cymric = new Cymric($name, $operation);
            $cymricname = $name;
        }

        $line = trim($input[$count++]);
    }

    //$wantedAnimal = trim(fgets(STDIN));
    $wantedAnimal = trim($input[4]);

    if($streeExtraorname === $wantedAnimal){
        echo $streeExtraor->__toString();
    }elseif ($cymricname === $wantedAnimal){
        echo $cymric->__toString();
    }elseif ($syamesename === $wantedAnimal){
        echo $syamese->__toString();
    }

}catch (Exception $e){
    echo $e->getMessage();
}