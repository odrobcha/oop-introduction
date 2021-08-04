<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature = 'cold';

    function __construct(string $color, float $price){
        $this->color=$color;
        $this->price=$price;
    }
    function setColor($color){
        $this->color=$color;
    }
    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color. <br>
                The price is $this->price €.";
    }
};

class AlcoholBeverage extends Beverage
{
    protected string $name;
    protected float $alcoholPercentage;

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
$beer->setColor("light blond");
echo $beer->getName();
echo '<br>';
echo $beer->getInfo();
echo '<br>';
echo $beer->getAlcoholPercentage();