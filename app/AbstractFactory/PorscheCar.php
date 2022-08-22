<?php
namespace App\AbstractFactory;
class PorscheCar implements Car
{

    public function getDescription()
    {
        echo "This is a Porsche \n";
    }
}