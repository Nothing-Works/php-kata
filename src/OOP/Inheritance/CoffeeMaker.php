<?php

namespace App\OOP\Inheritance;

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

//"is a"
class SpecialtyCoffeeMaker extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}

(new SpecialtyCoffeeMaker())->brew();
(new SpecialtyCoffeeMaker())->brewLatte();
