<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Atividade 8</title>
</head>
<body style="font: normal 15pt Arial;">
	<?php
		$sexo=$_POST["sexo"];
		$altura=$_POST["altura"];
		if ($sexo == "masc") {
			$pesoIdeal=(72*$altura)-58;
			$gen="o rapaz";
		} else {
			$pesoIdeal=(62.1*$altura)-44;
			$gen="a moça";
		}
		echo "<p>O peso ideal para $gen é $pesoIdeal kg.</p>";
	?>
</body>
</html>