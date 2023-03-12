<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Equação do Segundo Grau</title>
</head>
<body>
    <h1>Equação do Segundo Grau</h1>
    <?php
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$_POST["c"];
        $delta=$b**2-4*$a*$c;
        echo "<p>Dado os valores: A=$a, B=$b e C=$c; o valor de delta é: $delta.</p>";
        if ($a != 0 && $b != 0 && $c != 0) { // equação 2º grau completa
            if ($delta >= 0) { // delta com valor neutro ou positivo
                $x1=(-$b+($delta**(1/2)))/(2*$a);
                $x2=(-$b-($delta**(1/2)))/(2*$a);
                echo "<p>Sendo assim, as raízes da equação são respectivamente $x1 e $x2.</p>";
            } else { // delta com valor negativo
                echo "<p>Sendo delta com valor negativo, não é possível calcular as raízes da equação de 2º grau.</p>";
            }
        } else { // equação 2º grau incompleta
            if ($a == 0 && $b == 0 && $c == 0) { // a, b, c == 0
                echo "Sendo os valores de A, B e C equivalentes a 0, não é possível determinar uma raíz para a equação.";
            } elseif (($b == 0 && $c == 0) || ($a == 0 && $c == 0)) { // b, c == 0 ou a, c == 0
                echo "Sendo B e C ou A e C iguais a 0, x também terá valor 0.";
            } elseif ($a != 0 && $b != 0) { // c == 0
                $x1=0;
                $x2=(-$b)/$a;
                echo "Sendo C igual a 0, as raízes da equação são respectivamente $x1 e $x2.";
            } elseif ($a != 0 && $c != 0) { // b == 0
                $x1=((-$c)/$a)**(1/2);
                $x2=-((-$c)/$a)**(1/2);
                if ($delta < 0) { // raíz quadrada de números negativos
                    echo "Os valores possíveis resultaram em um raíz quadrada de números negativos, portanto, não é possível determinar a raíz.";
                } else {
                    echo "Sendo B igual a 0, as raízes da equação são respectivamente $x1 e $x2.";
                }
            } elseif ($b != 0 && $c != 0) { // a == 0
                $x=(-$c)/$b;
                echo "Sendo A igual a 0, o valor da raíz possível é $x.";
            } else { // a, b == 0
                echo "Sendo A e B igual a 0, a expressão se torna inválida, pois $c != 0.";
            }
        }
    ?>
</body>
</html>