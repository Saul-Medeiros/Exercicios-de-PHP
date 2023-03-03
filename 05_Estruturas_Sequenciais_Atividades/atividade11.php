<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 11</title>
	<style>
		body {
			font: normal 15pt Arial;
		}
	</style>
</head>
<body>
	<?php
		$raio=$_POST["raio"];
		$area=3.14*($raio**2);
		echo "<p>A área do círculo é de <strong>$area cm2</strong>.</p>";
	?>
</body>
</html>