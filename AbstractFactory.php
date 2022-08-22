<?php
use App\AbstractFactory\PorscheFactory;
use App\AbstractFactory\TeslaFactory;

require_once __DIR__."/vendor/autoload.php";

// Porsche
$porscheFactory = new PorscheFactory();
$car = $porscheFactory->makeCar();
$partCar = $porscheFactory->makePartCar();

$car->getDescription();
$partCar->design();

// Tesla

$teslaFactory = new TeslaFactory();
$car = $teslaFactory->makeCar();
$partCar = $teslaFactory->makePartCar();

$car->getDescription();
$partCar->design();

