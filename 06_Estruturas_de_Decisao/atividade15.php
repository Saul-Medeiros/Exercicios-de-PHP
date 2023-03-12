<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 15</title>
</head>
<body>
    <h1>Atividade 15</h1>
    <?php
        $hora=$_POST["hora"];
        $valor=$_POST["valor"];
        $salario_bruto=$valor*$hora;
        if ($hora <= 80) {
            $comissao=$salario_bruto*0.08;
        } elseif ($hora > 80 && $hora <= 120) {
            $comissao=$salario_bruto*0.09;
        } else {
            $comissao=$salario_bruto*0.10;
        }
        echo "O salário bruto do professor equivale a R$ $salario_bruto e o prêmio recebido equivale a R$ $comissao.";
    ?>
</body>
</html>