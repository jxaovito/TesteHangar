<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once 'resposta_1.php';
    
    ?>
  
<form method="post">
  <label for="nota1">Nota 1:</label>
  <input type="number" name="nota1" id="nota1">
<br>
  <label for="nota2">Nota 2:</label>
  <input type="number" name="nota2" id="nota2">
<br>
  <label for="nota3">Nota 3:</label>
  <input type="number" name="nota3" id="nota3">
<br>
  <input type="submit" value="Calcular média">
</form>

  <?php
 
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nota = new Nota($_POST['nota1'], $_POST['nota2'], $_POST['nota3']);
    $nota->calculaMedia();
  } 
  
 
?>
</body>
</html>