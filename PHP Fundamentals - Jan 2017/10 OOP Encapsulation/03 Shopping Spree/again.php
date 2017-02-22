<?php

class Person{

    private $name;
    private $money;
    private static $bagOfProducts = [];
    private static $alldata = [];
    private static $countBought = [];

    public function __construct($name, $money)
    {
        $this->name = $name;
        $this->money = $money;
        Person::$alldata[$name] = $money;
        Person::$countBought[$name] = 0;
        $array = [];
        Person::$bagOfProducts[$name] = $array;
    }

    public function setName(string $name)
    {
        if(strlen($name) === 0){
            throw new Exception('Name cannot be an empty string.');
        }
        $this->name = $name;
    }

    public function setMoney($money)
    {
        if($money < 0){
            throw new Exception('Money cannot be a negative number.');
        }
        $this->money = $money;
    }

    public static function getBagOfProducts(): array
    {
        return self::$bagOfProducts;
    }

    public static function getAlldata(): array
    {
        return self::$alldata;
    }

    public static function getCountBought(): array
    {
        return self::$countBought;
    }

    public function affordProducts(String $name,
                                   string $productname)
    {
        $allproducts = Product::getPriceAndProducts();
        $money = Person::$alldata[$name];
        $productPrice = $allproducts[$productname];
        if($money - $productPrice >= 0){
            echo "$name bought $productname" . PHP_EOL;
            $products = Person::$bagOfProducts[$name];
            var_dump($products);
            array_push($products, $productname);
            var_dump($products);
            Person::$bagOfProducts[$name] = $products;
            Person::$countBought[$name] = 1;
            Person::$alldata[$name] = $money - $productPrice;
            }else{
            echo "$name can't afford $productname" . PHP_EOL;
        }
    }
}

class Product{

    private $productName;
    private $price;
    private static $priceAndProducts =[];

    public function __construct($productName, $price)
    {
        $this->productName = $productName;
        $this->price = $price;
        Product::$priceAndProducts[$productName] = $price;
    }

    public static function getPriceAndProducts(): array
    {
        return self::$priceAndProducts;
    }
}

$allpersons = 'Pesho=11;Gosho=4;';
//$allpersons = trim(fgets(STDIN));
$allproducts = 'Bread=10;Milk=2;';
//$allproducts = trim(fgets(STDIN));

$input = [];
$input[] = 'Pesho Bread';
$input[] = 'Gosho Milk';
$input[] = 'Gosho Milk';
$input[] = 'Gosho Milk';
$input[] = 'END';

try{

    $person = null;
    $product = null;

    $persons = explode(';', $allpersons);

    for ($x = 0; $x < count($persons) - 1; $x++) {

        $temppersonsdata = explode('=', $persons[$x]);

        $person = new Person($temppersonsdata[0],
            intval($temppersonsdata[1]));
    }

    $products = explode(';', $allproducts);

    for ($x = 0; $x < count($products) - 1; $x++) {
        $tempproducts = explode('=', $products[$x]);

        $product = new Product($tempproducts[0],
            intval($tempproducts[1]));
    }

   //$comand = trim(fgets(STDIN));

    //remove

    for ($x = 0; $x < count($input); $x++) {

        $comand = trim($input[$x]);
        if($comand === 'END'){
            break;
        }

        $comandsdata = explode(' ', $comand);
        $name = $comandsdata[0];
        $productname = $comandsdata[1];
        $person->affordProducts($name, $productname);

    }
//remove

//    while (true){
//        if($comand === 'END'){
//            break;
//        }
//
//        $comand = trim(fgets(STDIN));
//        $name = $comand[0];
//        $productname = $comand[1];
//        $person->affordProducts($name, $productname);
//    }

    $allpurching = Person::getBagOfProducts();
    foreach ($allpurching as $key => $value){
        $data = $allpurching[$key];
        $output = "{$key} - ";
        foreach ($data as $product){
            $output .= $product . ", ";
        }
        $output = substr($output, 0, -2);
        echo $output . PHP_EOL;
    }

    $counAllBought = $person->getCountBought();
    foreach ($counAllBought as $key => $value){
        if($value == 0){
            echo "{$key} – Nothing bought" . PHP_EOL;
        }
    }

}catch (Exception $e){
    echo $e->getMessage();
}























































