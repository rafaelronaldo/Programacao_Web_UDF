<?php

	$txt = "Rafael Ronaldo Ferreira Martins";

	//qtd de caracteres de uma string
	print strlen($txt);
	print "<br>";

	//qtd de palavras de uma string
	print str_word_count($txt);
	print "<br>";

	//todas as palavras em maiusculo
	print strtoupper($txt);
	print "<br>";

	//todas as palavras em minusculo
	print strtolower($txt);
	print "<br>";

	//somente a primeira letra maiuscula
	print ucfirst ($txt);
	print "<br>";

	//a primeira de cada palavra maiuscula
	print ucwords ($txt);
	print "<br>";

	//para reverter uma string
	print strrev($txt);
	print "<br>";

	//embaralhar as strings
	print str_shuffle($txt);
	print "<br>";

	//substituir parte de uma string
	print str_replace("Ferreira Martins", "", $txt);
	print "<br>";

	//trazer ou excluir parte de uma string
	print substr ($txt, 0, 6);

?>