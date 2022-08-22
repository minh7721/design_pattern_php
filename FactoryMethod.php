<?php
use App\FactoryMethod\DevelopmentManager;
use App\FactoryMethod\MarketingManager;

require_once __DIR__."/vendor/autoload.php";

$devManager = new DevelopmentManager();
$devManager->takeInterview();
$marketingManager = new MarketingManager();
$marketingManager->takeInterview();

