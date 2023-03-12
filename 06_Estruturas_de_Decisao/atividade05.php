<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 5</title>
</head>
<body style="font: normal 15pt Arial;">
	<h1>Números informados:</h1>
	<?php
		$num1=$_POST["num1"];
		$num2=$_POST["num2"];
		echo "<p>Primeiro número: $num1</p>
		<p>Segundo número: $num2</p>";
		if ($num1 > $num2) {
			echo "<p>O primeiro número é maior que o segundo.</p>";
		} elseif ($num1 < $num2) {
			echo "<p>O primeiro número é menor que o segundo.</p>";
		}
	?>
</body>
</html>