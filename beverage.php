<?php
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature = 'cold';

    function __construct(string $color, float $price){
        $this->color=$color;
        $this->price=$price;
    }

    function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color. <br>
                The price is $this->price €.";
    }
};