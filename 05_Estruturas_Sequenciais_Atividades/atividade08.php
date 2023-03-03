<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 08</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$nome=$_POST["nome"];
		$idade=$_POST["idade"];
		$after30y=$idade+30;
		echo "<p>A idade de $nome hoje é <strong>$idade anos</strong>. Daqui 30 anos ele vai ter <strong>$after30y anos</strong>.</p>";
	?>
</body>
</html>