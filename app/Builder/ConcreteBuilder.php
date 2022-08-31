<?php

namespace App\Builder;

class ConcreteBuilder implements Builder
{
    private $product;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function reset(): void{
        $this->product = new Product();
    }
    public function producePartA()
    {
        $this->product->parts[]= "Part A";
    }

    public function producePartB()
    {
        $this->product->parts[] = "Part B";
    }

    public function producePartC()
    {
        $this->product->parts[] = "Part C";
    }

    public function getProduct(): Product
    {
        $result = $this->product;
        $this->reset();
        return $result;
    }
}