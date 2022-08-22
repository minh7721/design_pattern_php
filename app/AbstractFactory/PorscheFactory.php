<?php
namespace App\AbstractFactory;
class PorscheFactory implements CarFactory
{
    public function makeCar()
    {
        return new PorscheCar();
    }
    public function makePartCar()
    {
        return new StaffCarPorsche();
    }
}