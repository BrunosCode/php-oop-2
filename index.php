<?php 
require __DIR__ . "/classes/User.php";

$user001 = new User(
  0,
  "edoardo",
  "magnani",
  "edobruno@icloud.com",
  "via Qualcosa, 3, da qualche parte."
);

var_dump($user001);

?>