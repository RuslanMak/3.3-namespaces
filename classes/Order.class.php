<?php

namespace Classes;

final class Order extends \classes\cart {
    public function showAllProduct() {
        $totalCountProduct = 0;
        foreach ($this->countProduct as $key => $value) {
            echo "<b>Product </b>" . $value->name . "<b>; Price per unit: </b>" . $value->price  .', quantity: ' . $value->numberProduct . "<br><br>";
            $totalCountProduct = $totalCountProduct + $value->numberProduct;
        }
        echo "<b>Total products: </b>" . $totalCountProduct;
    }
}