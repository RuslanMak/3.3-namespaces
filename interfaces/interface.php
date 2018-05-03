<?php

//-------------------------------------------MyInterface-------------------------------------------

//namespace Interfaces;

interface MyConstruct
{
    public function __construct($name, $discount, $price);
}

interface MyPrice extends MyConstruct
{
    public function getPrice();
}

interface ChangeColor
{
    public function changeColor($color);
}

interface Category
{
    public function category($category);
}
