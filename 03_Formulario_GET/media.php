<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Média aritmética</title>
</head>
<body>
	<?php
		$nome=$_POST["nome"];
		$nota1=$_POST["nota1"];
		$nota2=$_POST["nota2"];
		$nota3=$_POST["nota3"];
		$nota4=$_POST["nota4"];
		$media=($nota1+$nota2+$nota3+$nota4)/4;
		if ($media>=7) {
			$sit="Aprovado";
		} elseif ($media>3 && $media<7) {
			$sit="de Recuperação";
		} else {
			$sit="Reprovado";
		}
		echo "A média aritmética de $nome é: $media e está $sit.";
	?>
</body>
</html>