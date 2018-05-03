<?php

//-------------------------------------------MySuperClass-------------------------------------------

namespace Classes;

abstract class Products implements \interfaces\MyConstruct
{
    public $name;
    public $discount;
    public $price;

    public function getPrice()
    {
        if ($this->discount) {
            return round($this->price - ($this->price * $this->discount / 100));
        } else {
            return $this->price;
        }
    }

    public function __construct($name, $discount, $price)
    {
        $this->name = $name;
        $this->discount = $discount;
        $this->price = $price;
    }
}