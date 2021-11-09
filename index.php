<?php 
require __DIR__ . "/classes/UserPremium.php";
require __DIR__ . "/classes/CreditCard.php";
require __DIR__ . "/classes/Monitor.php";

$user001 = new PremiumUser(
  0,
  "edoardo",
  "magnani",
  "edobruno@icloud.com",
  "via Qualcosa, 3, da qualche parte.",
);
echo "User </br>";
var_dump($user001);


$user001->set_creditCard(new CreditCard("MasterCard", "Edoardo Magnani", "08047079793479579", "23/25", "352"));
echo "User with CreditCard </br>";
var_dump($user001);

$monitor001 = new Monitor(
  "001",
  1050,
  "Samsung",
  "description bla bla bla",
  "27 inch",
  "4K",
  "60fps"
);

$user001->add_toCart($monitor001);
echo "buy the monitor </br>";

$user001->add_toTotalSpent();
$user001->set_discount();

var_dump($user001);

$user001->add_toCart($monitor001);
echo "buy again the monitor </br>";

$user001->add_toTotalSpent();
$user001->set_discount();

var_dump($user001);
?>