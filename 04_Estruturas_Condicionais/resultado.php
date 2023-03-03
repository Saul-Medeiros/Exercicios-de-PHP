<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Resultado</title>
</head>
<body>
	<p style="font: bold 30pt Times New Roman;">Seu destino é:</p><br>
	<?php
		$salario=$_POST["salario"];
		if($salario=="sim")
		{
			echo "Vou sair com os amigos!";
		}
		else
		{
			echo "Vou assistir um filme em casa!";
		}
	?>
</body>
</html>