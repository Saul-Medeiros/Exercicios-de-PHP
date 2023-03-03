<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 10</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$nome=$_POST["nome"];
		$salario=$_POST["salario"];
		$reajuste=$salario*0.1;
		$salario+=$reajuste;
		echo "<p>O salário de $nome reajustado para 10% do seu salário, passará a valer R$ $salario.</p>";
	?>
</body>
</html>