<?php
namespace App\AbstractFactory;
class StaffCarPorsche implements partCar
{

    public function assemble()
    {
        echo "I'm only assemble Porsche car\n";
    }
    public function manufacturing()
    {
        echo "I'm only manufacturing Porsche car\n";
    }
    public function design()
    {
        echo "I'm only design Porsche car\n";
    }
}