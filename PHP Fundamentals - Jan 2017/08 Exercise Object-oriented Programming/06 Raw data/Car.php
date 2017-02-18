<?php

class Car
{
    private $model;
    private $engine;
    private $cargo;
    /**
     * @var Tire[]
     */
    private $tires = [];

    public function __construct(string $model,
                                Engine $engine,
                                Cargo $cargo,
                                Tire $tire1,
                                Tire $tire2,
                                Tire $tire3,
                                Tire $tire4)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        array_push($this->tires, $tire1, $tire2, $tire3, $tire4);
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

    public function getTires(): array
    {
        return $this->tires;
    }
}

class Engine
{
    private $Speed;
    private $Power;

    public function __construct($Speed, $Power)
    {
        $this->Speed = $Speed;
        $this->Power = $Power;
    }

    public function getPower()
    {
        return $this->Power;
    }
}

class Cargo
{
    private $Weight;
    private $Type;

    public function __construct($Weight, $Type)
    {
        $this->Weight = $Weight;
        $this->Type = $Type;
    }

    public function getType()
    {
        return $this->Type;
    }


}

class Tire
{
    private $Age;
    private $pressure;

    public function __construct($Age, $pressure)
    {
        $this->Age = $Age;
        $this->pressure = $pressure;
    }
}

$cars = [];

//$numLines = fgets(STDIN);
$numLines = 2;

$input = [];
$line = "ChevroletAstro 200 180 1000 fragile 1.3 1 1.5 2 1.4 2 1.7 4";
$line2 = "Citroen2CV 190 165 1200 fragile 0.9 3 0.85 2 0.95 2 1.1 1";
$input[] = $line;
$input[] = $line2;

for ($x = 0; $x < $numLines; $x++) {
    //$data = explode(" ", $line);
    $data = explode(" ", $input[$x]);

    $model = $data[0];

    $engineSpeed = intval($data[1]);
    $enginePower = intval($data[2]);
    $engine = new Engine($engineSpeed, $enginePower);

    $cargoWeight = intval($data[3]);
    $cargoType = $data[4];
    $cargo = new Cargo($cargoWeight, $cargoType);

    $tire1Presure = floatval($data[5]);
    $tire1Age = floatval($data[6]);
    $tire1 = new Tire($tire1Age, $tire1Presure);

    $tire2Presure = floatval($data[7]);
    $tire2Age = floatval($data[8]);
    $tire2 = new Tire($tire2Age, $tire2Presure);

    $tire3Presure = floatval($data[9]);
    $tire3Age = floatval($data[10]);
    $tire3 = new Tire($tire3Age, $tire3Presure);

    $tire4Presure = floatval($data[11]);
    $tire4Age = floatval($data[12]);
    $tire4 = new Tire($tire4Age, $tire4Presure);


    $car  = new Car($model, $engine, $cargo, $tire1, $tire2, $tire3, $tire4);
    $cars[$cargoType] = $car;
}

var_dump($cars);
