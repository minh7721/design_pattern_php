<?php
namespace App\AbstractFactory;
class StaffCarTesla implements partCar
{
    public function assemble()
    {
        echo "I'm only assemble Tesla car\n";
    }
    public function manufacturing()
    {
        echo "I'm only manufacturing Tesla car\n";
    }
    public function design()
    {
        echo "I'm only design Tesla car\n";
    }
}