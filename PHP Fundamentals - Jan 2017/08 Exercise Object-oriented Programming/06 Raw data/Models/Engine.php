<?php

namespace Models;

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