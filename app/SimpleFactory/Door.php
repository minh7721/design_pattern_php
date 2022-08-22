<?php
namespace App\SimpleFactory;
interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
    public function area(): float;
    public function perimeter(): float;
}