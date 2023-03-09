<?php

$servidor = "localhost";
$username = "root";
$password = "";

// try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($pdo) {
		echo "Conectado com sucesso ao banco de dados";
	}
// } catch (PDOException $e) {
// 	echo $e->getMessage();
// }

SELECT *
FROM orders, user
JOIN user ON orders, user

?>