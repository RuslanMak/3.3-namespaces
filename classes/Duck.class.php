<?php

namespace Classes;

class Duck extends Products implements \MyPrice, \ChangeColor
{
    private $color = 'White';
    public function changeColor($color)
    {
        $this->color = $color;
    }
}