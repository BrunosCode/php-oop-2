<?php
require_once __DIR__ . "/User.php";

class PremiumUser extends User
{
  private $discount;

  public function __construct($_id, $_name, $_surname, $_email, $_address = "", $_creditCard = null)
  {
    parent::__construct($_id, $_name, $_surname, $_email, $_address = "", $_creditCard = null);
    $this->discount = 0;
  }
  
  public function get_discount()
  {
    return $this->discount;
  }
  
  public function set_discount()
  {
    if ( $this->totalSpent > 1000 ) {
      $this->discount = intval($this->totalSpent / 500);
    };
  }

  public function get_cartTotalPrice()
  {
    $total = 0;
    foreach ($this->cart as $product) {
      $total += $product->get_price();
    }
    $total -= $total * $this->discount / 100;
    echo "Cart total is: {$total}€ </br>";
    return $total;
  }
}