<?php
require_once __DIR__ . "/Product.php";

class Monitor extends Product
{
  private $dimensions;
  private $definition;
  private $frameRates;
  private $ports;

  public function __costruct($_name, $_price, $_producer, $_description, $_dimentions = "", $_definition = "", $_frameRates = "", $_ports = [])
  {
    parent::__construct($_name, $_price, $_producer, $_description);
    $this->dimentions = $_dimentions;
    $this->definition = $_definition;
    $this->frameRates = $_frameRates;
    $this->ports = $_ports;
  }

  public function set_dimentions($_dimentions)
  {
    $this->dimentions = $_dimentions;
  }
  public function get_dimentions()
  {
    return $this->dimentions;
  }

  public function set_definition($_definition)
  {
    $this->definition = $_definition;
  }
  public function get_definition()
  {
    return $this->definition;
  }

  public function set_frameRates($_frameRates)
  {
    $this->frameRates = $_frameRates;
  }
  public function get_frameRates()
  {
    return $this->frameRates;
  }

  public function set_ports($_ports)
  {
    $this->ports = $_ports;
  }
  public function get_ports()
  {
    return $this->ports;
  }
}