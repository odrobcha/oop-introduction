<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
change the properties to private.
fix the errors without using getter and setter functions.
change the price to 3.5 euro and print it also on the screen on a new line.
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

    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color. <br>
                The price is $this->price €.";
    }
    function getName() :string{
        return $this->color;
    }
    function setPrice($price)
    {
        $this->price=$price;
    }
};

$cola = new Beverage('black', 2.00);

echo $cola->getInfo();
echo '<br>';
$cola->setPrice(3.50);

echo $cola->getInfo();
