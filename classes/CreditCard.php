<?php

class CreditCard
{
  private $bank;
  private $holder;
  private $number;
  private $expiration;
  private $secretCode;

  public function __construct($_bank, $_holder, $_number, $_expiration, $_secretCode)
  {
    $this->bank = $_bank;
    $this->holder = $_holder;
    $this->number = $_number;
    $this->expiration = $_expiration;
    $this->secretCode = $_secretCode;
  }

  public function get_bank()
  {
    return $this->bank;
  }
  public function get_holder()
  {
    return $this->holder;
  }
  public function get_number()
  {
    return $this->number;
  }
  public function get_expiration()
  {
    return $this->expiration;
  }
  public function get_secretCode()
  {
    return $this->secretCode;
  }
}
