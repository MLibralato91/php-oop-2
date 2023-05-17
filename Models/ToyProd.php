<?php
include_once __DIR__ . '/Product.php';

class ToyProd extends Product
{
  public
    $type;
  public function __construct($name, $price, $image, $type)
  {
    parent::__construct($name, $price, $image);
    $this->type = $type;
  }
}
