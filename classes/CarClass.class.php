<?php

namespace Classes;

class CarClass extends Products implements \interfaces\MyPrice, \interfaces\ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}