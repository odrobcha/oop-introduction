<?php

declare(strict_types=1);

/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen
create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';

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
            ."We serve alcohol only for people older 21";
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
echo '<br>';
echo $beer->welcomeToTheBar();