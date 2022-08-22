<?php
namespace App\Facade;
class YouTube
{
    public function fetchVideo(): string {
        return "Fetch video\n";
    }
    public function saveAs(string $path, string $name): void {
        echo "Path: ".$path."\n";
        echo "Name: ".$name."\n";
    }
    public function getTitle(){
        echo "Title from FetchVideo\n";
    }
}