<?php

namespace Classes;

class Product extends Products implements \interfaces\MyPrice, \interfaces\Category
{
    public function category($category)
    {
        $this->category = $category;
    }
}