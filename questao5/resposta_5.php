<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->prepare("SELECT orders.order_date, SUM(orders.order_total) 
  FROM orders
  GROUP BY MONTH(order_date), YEAR(order_date)");
  

} catch (PDOException $e) {
	echo $e->getMessage();
}

?>