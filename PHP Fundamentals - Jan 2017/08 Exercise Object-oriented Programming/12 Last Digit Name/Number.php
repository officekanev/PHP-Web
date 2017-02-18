<?php


class Number
{
    private $number;

    /**
     * Number constructor.
     * @param $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;

    }

    public function returnNameOfNumber(Number $number): string
    {
        $lastDigit = $this->number % 10;
        switch ($lastDigit){
            case 0 : return 'zero';
            break;
            case 1 : return 'one';
                break;
            case 2 : return 'two';
                break;
            case 3 : return 'three';
                break;
            case 4 : return 'four';
                break;
            case 5 : return 'five';
                break;
            case 6 : return 'six';
                break;
            case 7 : return 'seven';
                break;
            case 8 : return 'eight';
                break;
            case 9 : return 'nine';
                break;
        }
    }
}

$input = intval(fgets(STDIN));
//$input = intval(1024);
$number = new Number($input);
$result = $number->returnNameOfNumber($number);
echo $result;
