<?php
namespace App\SimpleFactory;
class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function area(): float
    {
        $area = $this->width*$this->height;
        return $area;
    }

    public function perimeter(): float
    {
        $perimeter = ($this->width)*2 + ($this->height)*2;
        return $perimeter;
    }
}