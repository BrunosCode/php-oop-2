<?php
require_once __DIR__ . "/CreditCard.php";

class User {
  private $id;
  private $name;
  private $surname; 
  private $email;
  private $address; 

  public function __construct($_id, $_name, $_surname, $_email, $_address)
  {
    $this->id = $_id;
    $this->name = $_name;
    $this->surname = $_surname;
    $this->email = $_email;
    $this->address = $_address;
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


}

?>