<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $sql = 'SELECT user.user_name, user.user_city, user.user_country, orders.order_date, orders.order_total
  FROM user
  LEFT JOIN orders ON user.user_id = orders.order_user_id
  WHERE user.user_id IN (1, 3, 5)
  ORDER BY user.user_name ASC;';

  $stmt = $pdo->query($sql);

  $request = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print("<p>".print_r($request,true)."</p>");


} catch (PDOException $e) {
	echo $e->getMessage();
}

?>