<?php

namespace Classes;

class Duck extends Products implements \interfaces\MyPrice, \interfaces\ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}