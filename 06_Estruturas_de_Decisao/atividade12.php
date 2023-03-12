<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 12</title>
</head>
<body>
    <h1>Atividade 12</h1>
    <?php
        $nota=$_POST["nota"];
        if ($nota >= 7) {
            echo "Aluno Aprovado";
        } else {
            echo "Aluno Reprovado";
        }
    ?>
</body>
</html>