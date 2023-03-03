<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados GET</title>
</head>
<body>
	<?php
		$nome=$_GET["nome"]; //variável deve possuir mesmo nome do atributo "name"
		$end=$_GET["end"];
		$tel=$_GET["tel"];
		$email=$_GET["email"];
		echo "<h2>Foi informado:</h2>nome: $nome, Endereço: $end, Telefone: $tel, Email: $email";
	?>
</body>
</html>