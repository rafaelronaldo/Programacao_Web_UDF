<form action="04.php" method="POST">
	Nome <input type="text" name="nome">
	Data de Nascimento <input type="date" name="data_nasc">
	<button type="submit">Enviar</button>
</form>

<?php

	$nome = $_REQUEST['nome'];
	$data_nasc = $_REQUEST['data_nasc'];

	$senha = $nome.$data_nasc;
	$senha = str_replace(" ", "", $senha);
	$senha = str_replace("-", "", $senha);
	$senha = str_shuffle($senha);
	$senha = substr($senha, 0, 8);

	print("Minha senha é <br>$senha</b>");