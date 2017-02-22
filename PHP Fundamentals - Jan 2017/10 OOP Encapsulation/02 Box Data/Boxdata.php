<?php

class Box
{
    private $length;
    private $width;
    private $height;

    public function __construct(float $length,
                                float $width,
                                float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function setLength(float $length)
    {
        if($length < 0){
            throw new Exception("Length cannot be zero or negative.");
        }

        $this->length = $length;
    }

    public function setWidth(float $width)
    {
        if($width < 0){
            throw new Exception("Width cannot be zero or negative.");
        }

        $this->width = $width;
    }

    public function setHeight(float $height)
    {
        if($height < 0){
            throw new Exception("Height cannot be zero or negative.");
        }

        $this->height = $height;
    }

    public function calculateSurface()
    {
        $output = "Surface Area - ";
        $result = (2 * ($this->length * $this->width))
            + (2 * ($this->length * $this->height))
            + (2 * ($this->width * $this->height));
        $result = number_format($result, 2, '.','');
        return $output . $result . PHP_EOL;
    }

    public function calculateLateralSurface()
    {
        $output = "Lateral Surface Area - ";
        $result = (2 * ($this->length * $this->height))
            + (2 * ($this->width * $this->height)) ;
        $result = number_format($result, 2, '.','');
        return  $output . $result . PHP_EOL;
    }

    public function calculateVolume()
    {
        $result = $this->length * $this->width * $this->height;
        $result = number_format($result, 2, '.','');
        return "Volume - " . $result .  PHP_EOL;
    }
}

try{
    // $length = floatval(fgets(STDIN));
    $length = floatval(2);
    //$width = floatval(fgets(STDIN));
    $width = floatval(-3);
    //$height = floatval(fgets(STDIN));
    $height = floatval(4);

    $box = new Box($length, $width, $height);
    echo $box->calculateSurface();
    echo $box->calculateLateralSurface();
    echo $box->calculateVolume();

}catch (Exception $e){
    echo $e->getMessage();
}