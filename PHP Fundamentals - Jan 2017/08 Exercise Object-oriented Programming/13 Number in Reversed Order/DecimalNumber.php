<?php

class DecimalNumber
{
    private $number;

    /**
     * DecimalNumber constructor.
     * @param $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function reverceNumber():string
    {
       return strrev($this->number);
    }
}

$input = trim(fgets(STDIN));
//$input = trim('256');
$number = new DecimalNumber($input);
echo $number->reverceNumber();