<?php
class User {
  private $id;
  private $name;
  private $surname; 
  private $email;
  private $address; 
  private $creditCard;
  protected $cart;
  protected $totalSpent;

  public function __construct($_id, $_name, $_surname, $_email, $_address = "", $_creditCard = null)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->address = $_address;
    $this->creditCard = $_creditCard;
    $this->cart = [];
    $this->totalSpent = 0;
  }

  public function get_id()
  {
    return $this->id;
  }

  public function set_name($_name)
  {
    $this->name = $_name;
  }
  public function get_name()
  {
    return $this->name;
  }
  
  public function set_surname($_surname)
  {
    $this->surname = $_surname;
  }
  public function get_surname()
  {
    return $this->surname;
  }
  
  public function set_email($_email)
  {
    $this->email = $_email;
  }
  public function get_email()
  {
    return $this->email;
  }

  public function set_address($_address)
  {
    $this->address = $_address;
  }
  public function get_address()
  {
    return $this->address;
  }
  
  public function set_creditCard($_creditCard)
  {
    $this->creditCard = $_creditCard;
    echo "new Credit Card </br>";
    var_dump($this->creditCard);
  }
  public function get_creditCard()
  {
    return $this->creditCard;
  }

  public function get_cart()
  {
    return $this->cart;
  }
  public function add_toCart($product)
  {
    $this->cart[] = $product;
    echo "Cart contains </br>";
    var_dump($this->cart);
  }
  public function reset_cart()
  {
    $this->cart = [];
    echo "Cart empty </br>";
  }
  public function remove_fromCart($index)
  {
    unset($this->cart[$index]);
  }
  public function get_cartTotalPrice()
  {
    $total = 0;
    foreach ($this->cart as $product) {
      $total += $product->get_price();
    }
    echo "Cart total is: {$total}€ </br>";
    return $total;
  }

  public function get_totalSpent()
  {
    return $this->totalSpent;
  }
  public function add_toTotalSpent()
  {
    $this->totalSpent += $this->get_cartTotalPrice();
    $this->reset_cart();
  }
}

?>