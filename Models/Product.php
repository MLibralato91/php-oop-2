<?php

class Product
{
  public
    $name, $price, $image, $category;


  public function __construct($name, $price, $image, $category)
  {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->category = $category;
  }
}
