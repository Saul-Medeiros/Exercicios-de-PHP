<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 01</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$num=$_POST["num"];
		$dobro=$num*2;
		echo "<p>O dobro de <strong>$num</strong> é equivalente a: <strong>$dobro</strong>.</p>";
	?>
</body>
</html>