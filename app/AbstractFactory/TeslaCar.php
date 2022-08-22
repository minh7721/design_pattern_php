<?php
namespace App\AbstractFactory;
class TeslaCar implements Car
{

    public function getDescription()
    {
        echo "This is a Tesla \n";
    }
}