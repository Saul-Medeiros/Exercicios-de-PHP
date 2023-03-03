<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Soma</title>
</head>
<body>
	<?php
		$num1=$_POST["num1"];
		$num2=$_POST["num2"];
		$soma=$num1+$num2;
		echo "<h1>Resultado:</h1><p>O resultado da soma entre $num1 e $num2 é: $soma</p>";
	?>
</body>
</html>