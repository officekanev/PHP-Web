<?php

namespace Model;

use Model\Car;
use Model\Engine;

class Aplication
{
    /**
     * @var Engine[]
     */
    private $engines = [];
    /**
     * @var Car[]
     */
    private $cars = [];

    public function start()
    {
        $this->recieveInput();
    }

    public function recieveInput()
    {
        $numberofEngine = intval($this->readLine());

        for ($x = 0; $x < $numberofEngine; $x++) {
            $data = explode(" ", $this->readLine());
            $model = $data[0];
            $power = intval($data[1]);
            $displacement = null;
            $efficiency = null;
            if (count($data) > 2){
                if(is_numeric($data[2])){
                    $displacement = intval($data[2]);
                }else{
                    $efficiency = $data[2];
                }
            }

            if(count($data) > 3){
                $efficiency = $data[3];
            }

            $selectedEngine = new Engine($model, $power, $displacement, $efficiency);
            $this->addEngine($selectedEngine);
        }

        $numberofCars = intval($this->readLine());
        for ($x = 0; $x < $numberofCars; $x++) {
            $data = explode(" ", $this->readLine());
            $carData = explode(" ", $this->readLine());
            $carModel = $data[0];
            $carEngine = $data[1];
            $carWeight = null;
            $carColor = null;
            if (count($carData) > 2) {
                if (is_numeric($data[2])) {
                    $carWeight = intval($data[2]);
                } else {
                    $carColor = $data[2];
                }
            }
            if (count($data) > 3) {
                $carColor = $data[3];
            }
            $selectedEngine = $this->getEngineByName($carEngine);
            $car = new Car($carModel, $selectedEngine, $carWeight, $carColor);
            $this->addCar($car);
        }
        $this->printCars();
    }


    private function addEngine(Engine $engine)
    {
        $this->engines[$engine->getModel()] = $engine;
    }
    private function addCar(Car $car)
    {
        $this->cars[] = $car;
    }
    private function getEngineByName(string $name): Engine
    {
        return $this->engines[$name];
    }
    private function printCars()
    {
        foreach ($this->cars as $car) {
            $this->writeLine($car);
        }
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




























































































