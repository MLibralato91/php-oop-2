<?php
include_once __DIR__ . '/Product.php';

class FoodProd extends Product
{
  public
    $type;
  public function __construct($name, $price, $image, $category, $type)
  {
    parent::__construct($name, $price, $image, $category);
    $this->type = $type;
  }
}
