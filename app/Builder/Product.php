<?php
namespace App\Builder;
class Product
{
    public $parts = [];
    public function listParts(){
        echo "Product parts: ".implode(', ', $this->parts)."\n\n";
    }
}