<?php
include_once __DIR__ . '/Product.php';

class FoodProd extends Product
{
  public
    $food;
  public function __construct($name, $price, $image, $food)
  {
    parent::__construct($name, $price, $image);
    $this->food = $food;
  }
}
