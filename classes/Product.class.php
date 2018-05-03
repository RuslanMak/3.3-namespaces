<?php

class Product extends Products implements MyPrice, Category
{
    public function category($category)
    {
        $this->category = $category;
    }
}