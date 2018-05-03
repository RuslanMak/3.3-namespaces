<?php

namespace Classes;

class CarClass extends Products implements \MyPrice, \ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}