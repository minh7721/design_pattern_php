<?php

namespace App\Builder;

class Director
{
    private $builder;

    /**
     * @var Builder
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function getAProduct(): void
    {
        $this->builder->producePartA();
    }

    public function getAllProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}