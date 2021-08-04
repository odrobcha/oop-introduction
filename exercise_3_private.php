<?php

declare(strict_types=1);

/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



class Beverage
{
    private string $color;
    private float $price;
    private string $temperature = 'cold';

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
echo $beer->getName();
echo '<br>';
echo $beer->getInfo();
echo '<br>';
echo $beer->getAlcoholPercentage();