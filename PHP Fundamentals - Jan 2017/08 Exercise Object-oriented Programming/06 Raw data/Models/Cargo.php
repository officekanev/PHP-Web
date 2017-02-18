<?php

namespace Models;

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