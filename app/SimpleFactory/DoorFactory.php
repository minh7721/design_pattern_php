<?php
namespace App\SimpleFactory;
class DoorFactory
{
    public function makeDoor($width, $height):Door
    {
        return new WoodenDoor($width, $height);
    }
}