<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade 11</title>
</head>
<body>
    <h1>Atividade 11</h1>
    <?php
        $tempo=$_POST["tempo"];
        $veloc=$_POST["veloc"];
        $distancia=$tempo*$veloc;
        $litros_usados=$distancia/12;
        echo "<p>Velocidade média: $veloc km</p>
        <p>Tempo gasto na viagem: $tempo hrs</p>
        <p>Distância percorrida: $distancia quilômetros</p>
        <p>Quantidade de litros de combustível utilizado: $litros_usados L</p>";
    ?>
</body>
</html>