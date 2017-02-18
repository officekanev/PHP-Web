<?php


class Person
{
    public $name;

    /**
     * Person constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayGreeting():string
    {
       return  $this->name . ' says "Hello"!' . PHP_EOL;
    }
}

//$name = trim(fgets(STDIN));
$name = trim('Peter');
$person = new Person($name);
$fields = count(get_object_vars($person));
$methods = count(get_class_methods($person));
echo $person->sayGreeting();
if($fields !== 1 || $methods !== 2){
    throw new Exception("Too many fields or methods");
}
