<?php

use Models\Car;
use Models\Cargo;
use Models\Engine;
use Models\Tire;

class Forceaplication{

    /**
     * @var Car[]
     */
    private $cars = [];

    public function start()
    {
        $this->cultivateInput();
    }

    private function cultivateInput()
    {
        $numLines = intval($this->readLine());

        for ($x = 0; $x < $numLines; $x++) {
            $data = explode(" ", $this->readLine());
            //$data = explode(" ", $input[$x]);

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
            $this->cars[] = $car;
        }

        $printType = $this->readLine();
        $filteredCars = null;
        if ($printType === "flamable") {
            $filteredCars = $this->getFlammableCars();
        } else {
            $filteredCars = $this->getFragileCars();
        }
        foreach ($filteredCars as $car) {
            $this->writeLine($car);
        }
    }
    private function getFlammableCars(): array
    {
        return array_filter($this->cars, function (Car $car) {
            if ($car->getCargo()->getType() === "flamable" &&
                $car->getEngine()->getPower() > 250) {
                return true;
            }
            return false;
        });
    }
    private function getFragileCars(): array
    {
        return array_filter($this->cars, function (Car $car) {
            if ($car->getCargo()->getType() === "fragile") {
                foreach ($car->getTires() as $tire) {
                    if ($tire->getPressure() < 1) {
                        return true;
                    }
                }
            }
            return false;
        });
    }
    private function readLine(): string
    {
        return trim(fgets(STDIN));
    }
    /**
     * @param $content mixed
     */
    private function writeLine($content)
    {
        echo $content . PHP_EOL;
    }
}

//$numLines = 2;
//
//$input = [];
//$line = "ChevroletAstro 200 180 1000 fragile 1.3 1 1.5 2 1.4 2 1.7 4";
//$line2 = "Citroen2CV 190 165 1200 fragile 0.9 3 0.85 2 0.95 2 1.1 1";
//$input[] = $line;
//$input[] = $line2;

//$car  = new Car($model, $engine, $cargo, $tire1, $tire2, $tire3, $tire4);
//if($cargoType === 'fragile'){
//$fragile[] = $car;
//}else{
//    $flamable[] = $car;
//}
//}

//var_dump($cars);
//$comand = trim(fgets(STDIN));
//$comand = trim('fragile');
//if($comand === 'fragile'){
//    foreach ($fragile as $elements){
//        $tempArray = $elements['tires'];
//        var_dump($tempArray);
//    }
//}else{
//
//}