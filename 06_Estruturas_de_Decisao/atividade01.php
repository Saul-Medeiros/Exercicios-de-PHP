<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 1</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$num=$_POST["num"];
		$dobro=$num*2;
		if ($dobro < 35) {
			echo "<p>O dobro do número <strong>$num</strong> é igual a <strong>$dobro</strong>, sendo este menor que 35.</p>";
		} else {
			echo "<p>O dobro do número <strong>$num</strong> é <strong>$dobro</strong> e o mesmo não é menor que 35.</p>";
		}
	?>
</body>
</html>