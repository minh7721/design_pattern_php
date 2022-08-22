<?php
require __DIR__."/vendor/autoload.php";
use App\SimpleFactory\DoorFactory as DoorFactory;
$door = new DoorFactory();
$makeDoor = $door->makeDoor(5,4);
echo 'Width: ' . $makeDoor->getWidth() . "\n";
echo 'Height: ' . $makeDoor->getHeight() . "\n";
echo "Area: ". $makeDoor->area(). "\n";
echo "Perimeter: ". $makeDoor->perimeter()."\n";