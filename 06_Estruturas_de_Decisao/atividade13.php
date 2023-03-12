<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 13</title>
</head>
<body>
    <h1>Atividade 13</h1>
    <?php
        $num=$_POST["num"];
        if ($num >= 80 && $num <= 180) {
            echo "O número está no intervalo.";
        } else {
            echo "O número não está no intervalo.";
        }
    ?>
</body>
</html>