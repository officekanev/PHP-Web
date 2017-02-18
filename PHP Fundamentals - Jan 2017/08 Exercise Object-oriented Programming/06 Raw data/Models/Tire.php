<?php

namespace Models;

class Tire
{
    private $Age;
    private $pressure;

    public function __construct($Age, $pressure)
    {
        $this->Age = $Age;
        $this->pressure = $pressure;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}