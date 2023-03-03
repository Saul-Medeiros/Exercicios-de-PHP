<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 07</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$nota1=$_POST["nota1"];
		$nota2=$_POST["nota2"];
		$nota3=$_POST["nota3"];
		$resultado=($nota1+$nota2+$nota3)/3;
		echo "<p>A média final do aluno é igual a: <strong>$resultado</strong>.</p>";
	?>
</body>
</html>