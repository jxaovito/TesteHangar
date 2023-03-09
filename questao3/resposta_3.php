<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if ($pdo) {
		echo "Conectado com sucesso ao banco de dados";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

UPDATE user
SET user_country = Canada
WHERE user_id = 4;

SELECT user_contry
FROM user
WHERE user_id = 4;

$pdo = null;

?>

