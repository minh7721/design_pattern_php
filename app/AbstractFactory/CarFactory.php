<?php
namespace App\AbstractFactory;
interface CarFactory
{
    public function makeCar();
    public function makePartCar();
}