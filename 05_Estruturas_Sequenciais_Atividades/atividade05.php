<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 05</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$num1=$_POST["num1"];
		$num2=$_POST["num2"];
		$soma=$num1+$num2;
		echo "<p>A soma entre os números <strong>$num1</strong> e <strong>$num2</strong> é equivalente a: <strong>$soma</strong>.</p>";
		$diferenca=$num1-$num2;
		echo "<p>A diferença entre os números <strong>$num1</strong> e <strong>$num2</strong> é equivalente a: <strong>$diferenca</strong>.</p>";
		$produto=$num1*$num2;
		echo "<p>O produto entre os números <strong>$num1</strong> e <strong>$num2</strong> é equivalente a: <strong>$produto</strong>.</p>";
		$quociente=$num1/$num2;
		echo "<p>O quociente entre os números <strong>$num1</strong> e <strong>$num2</strong> é equivalente a: <strong>$quociente</strong>.";
	?>
</body>
</html>