<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 04</title>
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
		$subtracao=$num1-$num2;
		echo "<p>A diferença entre os números <strong>$num1</strong> e <strong>$num2</strong> é equivalente a: <strong>$subtracao</strong>.</p>";
	?>
</body>
</html>