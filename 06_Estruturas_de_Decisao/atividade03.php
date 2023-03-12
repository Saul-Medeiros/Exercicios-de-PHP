<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 3</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$num=$_POST["num"];
		$dobro=$num*2;
		if ($dobro == 48) {
			echo "<p>O dobro do número <strong>$num</strong> é igual a <strong>$dobro</strong>, sendo este igual a 48.</p>";
		} else {
			echo "<p>O dobro do número <strong>$num</strong> é igual a <strong>$dobro</strong>, sendo este diferente de 48.</p>";
		}
	?>
</body>
</html>