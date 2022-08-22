<?php
namespace App\AbstractFactory;
class TeslaFactory implements CarFactory
{
    public function makeCar()
    {
        return new TeslaCar();
    }
    public function makePartCar()
    {
        return new StaffCarTesla();
    }
}