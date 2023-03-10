<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
	echo $e->getMessage();
}

?>