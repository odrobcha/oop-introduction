<?php

declare(strict_types=1);

/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/

require ('beverage.php');

class AlcoholBeverage extends Beverage
{
    public string $name;
    public float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
    }
    function getAlcoholPercentage(): string
    {
        return "$this->name contains $this->alcoholPercentage % of alcohol";
    }

};

$beer = new AlcoholBeverage('blond', 4.00, 'Duwel', 8.00);

echo $beer->name;
echo '<br>';
echo $beer->getInfo();
echo '<br>';
echo $beer->getAlcoholPercentage();