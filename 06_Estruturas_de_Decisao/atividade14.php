<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 14</title>
</head>
<body>
    <h1>Atividade 14</h1>
    <?php
        $consumo=$_POST["consumo"];
        if ($consumo <= 150) {
            $gasto=$consumo*10;
            echo "Valor total a ser pago: R$$gasto,00.";
        } elseif ($consumo > 150 && $consumo <= 200) {
            $gasto=$consumo*12;
            echo "Valor total a ser pago: R$$gasto,00.";
        } else { // maior que 200
            $gasto=$consumo*15;
            echo "Valor total a ser pago: R$$gasto,00.";
        }
    ?>
</body>
</html>