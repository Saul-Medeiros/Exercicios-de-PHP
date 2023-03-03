<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 06</title>
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
		$num3=$_POST["num3"];
		$resultado=($num1+$num2)*$num3;
		echo "<p>O resultado da operação \"($num1 + $num2) * $num3\" equivale a: <strong>$resultado</strong>.";
	?>
</body>
</html>