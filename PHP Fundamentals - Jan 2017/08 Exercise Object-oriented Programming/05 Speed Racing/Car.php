<?php

class Car{

    public $model;
    public $fuelAmount;
    public $fuelCost;
    public $distanceTravelied;


    public function __construct(string $model,
                                float $fuelAmount,
                                float $fuelCost)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCost = $fuelCost;
        $this->distanceTravelied = 0;
    }

    public function drive(float $km)
    {
        $cost = $km * $this->fuelCost;
        $cost = round($cost, 2);

        if($cost > round($this->fuelAmount, 2)){
            throw new Exception("Insufficient fuel for the drive");
        }

        $this->fuelAmount -= $cost;
        $this->distanceTravelied += $km;
    }

     public function __toString()
    {
        return $this->model. ' ' . number_format(abs($this->fuelAmount), 2) . ' '
            . ceil($this->distanceTravelied);
    }
}

$cars = [];
$n = intval(trim(fgets(STDIN)));
while ($n--){
    $line = trim(fgets(STDIN));
    $tokens = explode(" ", $line);
    $model = $tokens[0];
    $startFuel = floatval($tokens[1]);
    $fuelCost = floatval($tokens[2]);

    $car = new Car($model, $startFuel, $fuelCost);
    $cars[$model] = $car;
}

$cmd = trim(fgets(STDIN));
while ($cmd != 'End'){
    $tokens = explode(" ", $cmd);

    if($tokens[0] != "Drive") {
        $cmd = trim(fgets(STDIN));
        continue;
    }

    $model = $tokens[1];
    $km = floatval($tokens[2]);

    $car = $cars[$model];
    try{
        $car->drive($km);
    }catch (Exception $e){
        echo $e->getMessage() . PHP_EOL;
    }

    $cmd = trim(fgets(STDIN));
}

foreach ($cars as $car){
    echo $car . PHP_EOL;
}

































//class Car
//{
//    private $model;
//    private $fuelAmount;
//    private $fuelSpenceForKilometer;
//    private $traveledDistance;
//
//    /**
//     * Car constructor.
//     * @param $model
//     * @param $fielAmount
//     * @param $fielSpenceForKilometer
//     * @param $traveledDistance
//     */
//    public function __construct(string $model,
//                                float $fuelAmount,
//                                float $fuelSpenceForKilometer,
//                                int $traveledDistance = 0)
//    {
//        $this->model = $model;
//        $this->fuelAmount = $fuelAmount;
//        $this->fuelSpenceForKilometer = $fuelSpenceForKilometer;
//        $this->traveledDistance = $traveledDistance;
//    }
//
//    /**
//     * @return string
//     */
//    public function getModel(): string
//    {
//        return $this->model;
//    }
//
//    /**
//     * @return float
//     */
//    public function getFuelAmount(): float
//    {
//        return $this->fuelAmount;
//    }
//
//    /**
//     * @return float
//     */
//    public function getFuelSpenceForKilometer(): float
//    {
//        return $this->fuelSpenceForKilometer;
//    }
//
//    /**
//     * @return int
//     */
//    public function getTraveledDistance(): int
//    {
//        return $this->traveledDistance;
//    }
//
//    /**
//     * @param int $traveledDistance
//     */
//    public function setTraveledDistance(int $traveledDistance)
//    {
//        $this->traveledDistance = $traveledDistance;
//    }
//
//    /**
//     * @param float $fuelAmount
//     */
//    public function setFuelAmount(float $fuelAmount)
//    {
//        $this->fuelAmount = $fuelAmount;
//    }
//
//    public  function  calculateTravelDistance(Car $tempCar, $desiredDistance): int
//    {
//        if($tempCar->getFuelAmount() - ($this->getFuelSpenceForKilometer() * $desiredDistance) >= 0){
//            $this->setFuelAmount($this->fuelAmount -= $desiredDistance);
//            $this->setTraveledDistance($this->traveledDistance += $desiredDistance);
//        }
////        if($this->getFuelAmount() - ($this->getFuelSpenceForKilometer() * $desiredDistance) >= 0 ){
////            $this->setFuelAmount($this->$fuelAmount -= $desiredDistance);
////            $this->setTraveledDistance($this->traveledDistance += $travdDistance);
////        }
//    }
//}
////TODO array to keep car models
//
////setCars()
//
////Car::setCars()