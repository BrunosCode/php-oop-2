<?php

class Product
{
  private $name;
  private $price;
  private $producer;
  private $descrition;

  public function __construct($_name, $_price, $_producer, $_description)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->producer = $_producer;
    $this->description = $_description;
  }

  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function get_name()
  {
    return $this->name;
  }

  public function set_price($_price)
  {
    $this->price = $_price;
  }
  public function get_price()
  {
    return $this->price;
  }

  public function set_producer($_producer)
  {
    $this->producer = $_producer;
  }
  public function get_producer()
  {
    return $this->producer;
  }

  public function set_description($_description)
  {
    $this->description = $_description;
  }
  public function get_description()
  {
    return $this->description;
  }

}
