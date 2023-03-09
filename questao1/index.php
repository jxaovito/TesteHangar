<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    require_once 'resposta_1.php';

    $aluno = new Nota(8, 9, 5);

    $aluno->calculaMedia();

    ?>
</body>
</html>