<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 2</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$num=$_POST["num"];
		$metade=$num/2;
		if ($metade > 55) {
			echo "<p>A metade do número <strong>$num</strong> é igual a <strong>$metade</strong> e o mesmo é maior que 55.</p>";
		} else {
			echo "<p>O metade do número <strong>$num</strong> é igual a <strong>$metade</strong> e o mesmo não é maior que 55.</p>";
		}
	?>
</body>
</html>