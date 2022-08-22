<?php
use App\Facade\YouTubeDownloader;
require_once __DIR__."/vendor/autoload.php";

function clientCode(YouTubeDownloader $facade)
{
    $facade->downloadVideo("https://www.youtube.com/watch?v=ZoNfrTfwhEU");
}

$facade = new YouTubeDownloader("APIKEY-XXXXXXXXX");
clientCode($facade);