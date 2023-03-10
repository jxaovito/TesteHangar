<?php

$servidor = "localhost";
$username = "root";
$password = "";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=teste_hangar', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("UPDATE user SET user_country = 'Canada' WHERE user_id = 4;");

    if($stmt->execute()){
        echo 'país alterado com sucesso';
    }


} catch (PDOException $e) {
	echo $e->getMessage();
}


?>

