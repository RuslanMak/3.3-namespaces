<?php

namespace Classes;

class Cart
{
    public $countProduct = [];
    public function addProduct($product)
    {
        $product->numberProduct = 1;
        if (array_key_exists($product->name, $this->countProduct)) {
            $this->countProduct[$product->name]->numberProduct++;
        } else {
            $this->countProduct[$product->name] = $product;
        }
    }

    public function totalPrice() {
        $count = 0;

        foreach ($this->countProduct as $key => $value) {
            $count = $count + ($value->price * $value->numberProduct);
        }
        return $count;
    }

}