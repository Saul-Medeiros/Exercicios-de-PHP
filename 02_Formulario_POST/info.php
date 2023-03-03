<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Nome</title>
</head>
<body>
	<?php
		$nome=$_POST["nome"];
		$telefone=$_POST["telefone"];
		$endereco=$_POST["endereco"];
		$cidade=$_POST["cidade"];
		$uf=$_POST["uf"];
		echo "<h1>Informações do usuário</h1><p>Nome: $nome</p><p>Telefone: $telefone</p><p>Endereço: $endereco</p><p>Cidade: $cidade</p><p>UF: $uf</p>";
	?>
</body>
</html>