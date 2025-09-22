<form action="01.php" method="post">
Nome <input type="text" name="nome">
Sobrenome <input type="text" name="sobrenome">
Ano de Nascimento  <input type="number" name="ano_nasc">
<button type="submit">Enviar</button>
</form>

<?php
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$ano_nasc = $_POST['ano_nasc'];
	$idade = date("Y") - $ano_nasc;
	

	print("Meu nome é $nome $sobrenome e tenho $idade anos");