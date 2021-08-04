<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/


class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';
    public static string $address = 'Melkmarkt 9, 2000 Antwerpen';
    public function getAddress(): string
    {
        return self::$address;
    }

    function __construct(string $color, float $price, $temperature = 'cold'){
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;
    }
    function setColor($color){
        $this->color=$color;
    }
    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color. <br>
                The price is $this->price €.";
    }
    function welcomeToTheBar(): string
    {
        return "We are happy to see you at " .self::barname ." every day from 1 pm to 11pm."
            .'<br>'
            ."We serve alcohol only for people older 21.";
    }
};

class AlcoholBeverage extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
    }

    function getName(): string
    {
        return $this->name;
    }
    function getAlcoholPercentage(): string
    {
        return "$this->name contains $this->alcoholPercentage % of alcohol";
    }
};

$beer = new AlcoholBeverage('red', 4.00, 'Duwel', 8.00);
$beer->setColor("blond");
echo $beer->getName() .'<br>';
echo $beer->getInfo() .'<br>';
echo $beer->getAlcoholPercentage() .'<br>';
echo $beer->welcomeToTheBar() .'<br>';
echo 'Our address is: ' .Beverage::$address .'<br>';
echo 'Remind, our address is: '.$beer->getAddress() .'<br>';

