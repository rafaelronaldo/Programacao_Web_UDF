<?php
	$nome = "Rafael Ronaldo";
	$data = "29/05/2006";

	$senha = $nome.$data;
	$senha = str_replace(" ", "", $senha);
	$senha = str_replace ("/", "", $senha);
	$senha = str_shuffle($senha);
	$senha = substr($senha, 0,8);

	print("Minha senha é <b>".$senha."</b");



?>