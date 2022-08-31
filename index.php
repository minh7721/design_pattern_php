<?php

use App\AbstractFactory\PorscheFactory;
use App\AbstractFactory\TeslaFactory;
use App\Builder\ConcreteBuilder;
use App\Builder\Director;
use App\Database\Database;
use App\Facade\YouTubeDownloader;
use App\FactoryMethod\DevelopmentManager;
use App\FactoryMethod\MarketingManager;
use App\SimpleFactory\DoorFactory;
use App\Singleton\Singleton;
use App\Builder\Builder;
use App\Builder\Product;
use App\Builder2\SQLQueryBuilder;
use App\Builder2\MysqlQueryBuilder;
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

    function clientCode(Director $director)
    {
        $builder = new ConcreteBuilder();
        $director->setBuilder($builder);

        echo "Lấy 1 sản phẩm:\n";
        $director->getAProduct();
        $builder->getProduct()->listParts();

        echo "Lấy ra tất cả sản phẩm:\n";
        $director->getAllProduct();
        $builder->getProduct()->listParts();

        // Remember, the Builder pattern can be used without a Director class.
        echo "Lấy sản phẩm tùy chọn:\n";
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }

    function clientCode2(SQLQueryBuilder $queryBuilder)
    {
        // ...
        $db = new Database();
        $query = $queryBuilder
            ->select("khach", ["k_id","k_ten","k_gt","k_ngsinh","k_email","k_sdt","k_diachi"])
            ->getSQL();
        $qr = $db->connect()->query($query);
        $ar = [];
        while ($row = $qr->fetch()) {
            array_push($ar, $row);
        }
        return $ar;
        // ...
    }
//AbstractFactory();
//echo "\n";
//Facade();
//echo "\n";
//FactoryMethod();
//echo "\n";
//SimpleFactory();
//echo "\n";
//SingleTon();
//echo "\n";
//$director = new Director();
//clientCode($director);

echo "Testing MySQL query builder:\n";
$mysqlQuery = clientCode2(new MysqlQueryBuilder());
echo "<pre>";
print_r($mysqlQuery);
