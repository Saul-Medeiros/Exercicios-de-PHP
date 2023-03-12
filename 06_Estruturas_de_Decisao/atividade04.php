<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 4</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$num=$_POST["num"];
		$metade=$num/2;
		if ($metade == 92) {
			echo "<p>A metade do número <strong>$num</strong> é igual a <strong>$metade</strong>, sendo este igual a 92.</p>";
		} else {
			echo "<p>A metade do número <strong>$num</strong> é igual a <strong>$metade</strong>, sendo este diferente de 92.</p>";
		}
	?>
</body>
</html>