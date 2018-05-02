<?php

//-------------------------------------------Classes-------------------------------------------

namespace Classes;
namespace Interfaces;

class CarClass extends Products implements MyPrice, ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}

class TV extends Products implements MyPrice
{
    public $diagonal;
}

class BallPen extends Products implements MyPrice
{
    public $color;
}

class Duck extends Products implements MyPrice, ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}

class Product extends Products implements MyPrice, Category
{
    public function category($category)
    {
        $this->category = $category;
    }
}

echo "<h1>It is classes</h1>";