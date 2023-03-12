<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 7</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$num=$_POST["num"];
		$dobro=$num*2;
		echo "<p>Número Informado: $num</p>";
		if ($dobro > 50) {
			echo "<p>O dobro é maior que 50.</p>";
		}
	?>
</body>
</html>