<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 12</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$valor=$_POST["valor"];
		$taxa=$_POST["taxa"];
		$tempo=$_POST["tempo"];
		$prestacao=$valor+($valor*$taxa/100)*$tempo;
		echo "<p>O valor da prestação em atraso é: <strong>R$ $prestacao</strong>.</p>";
	?>
</body>
</html>