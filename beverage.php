<?php
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature ;

    function __construct(string $color, float $price, string $temperature = 'cold'){
        $this->color=$color;
        $this->price=$price;
        $this->temperature=$temperature;
    }

    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color. <br>
                The price is $this->price €.";
    }
};