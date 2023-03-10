<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare("SELECT user.user_country, SUM(orders.order_total) 
  FROM user 
  LEFT JOIN orders ON orders.order_user_id = user.user_id
  GROUP BY user.user_country");

  if($stmt->execute()){
      var_dump($stmt);
  }
  



} catch (PDOException $e) {
	echo $e->getMessage();
}

  ?>
