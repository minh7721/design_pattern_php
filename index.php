<?php

use App\AbstractFactory\PorscheFactory;
use App\AbstractFactory\TeslaFactory;
use App\Facade\YouTubeDownloader;
use App\FactoryMethod\DevelopmentManager;
use App\FactoryMethod\MarketingManager;
use App\SimpleFactory\DoorFactory;
use App\Singleton\Singleton;

require_once __DIR__."/vendor/autoload.php";

function AbstractFactory(){
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
    }

    function Facade(){
        function clientCode(YouTubeDownloader $facade)
        {
            $facade->downloadVideo("https://www.youtube.com/watch?v=ZoNfrTfwhEU");
        }

        $facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
        clientCode($facade);
    }

    function FactoryMethod(){
        $devManager = new DevelopmentManager();
        $devManager->takeInterview();
        $marketingManager = new MarketingManager();
        $marketingManager->takeInterview();
    }

    function SimpleFactory(){
        $door = new DoorFactory();
        $makeDoor = $door->makeDoor(5,4);
        echo 'Width: ' . $makeDoor->getWidth() . "\n";
        echo 'Height: ' . $makeDoor->getHeight() . "\n";
        echo "Area: ". $makeDoor->area(). "\n";
        echo "Perimeter: ". $makeDoor->perimeter()."\n";
    }

    function SingleTon(){
        $s1 = Singleton::getInstance();
        $s2 = Singleton::getInstance();
        if ($s1 === $s2) {
            echo "Singleton works, both variables contain the same instance.";
        } else {
            echo "Singleton failed, variables contain different instances.";
        }
    }

AbstractFactory();
echo "\n";
Facade();
echo "\n";
FactoryMethod();
echo "\n";
SimpleFactory();
echo "\n";
SingleTon();