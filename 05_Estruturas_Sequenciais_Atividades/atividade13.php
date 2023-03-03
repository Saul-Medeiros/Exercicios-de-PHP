<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 13</title>
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
		$qtdVendas=$_POST["qtdVendas"];
		$comissao=($salario*0.15)*$qtdVendas;
		$salarioFinal=$salario+$comissao;
		echo "<p>$nome possui o salário de <strong>R$ $salario</strong> e conseguiu efetuar <strong>$qtdVendas</strong> vendas, recebendo 15% de comissão encima de cada venda. No final, acabou recebendo o valor de <strong>R$ $salarioFinal</strong>.</p>";
	?>
</body>
</html>