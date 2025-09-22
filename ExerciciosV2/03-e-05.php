<form action="03-e-05.php" method="POST">
	TEXTO
	<textarea rows="5" name="lorem"></textarea>
	<button type="submit">Enviar</button>
</form>

<?php

	$lorem = $_REQUEST['lorem'];

	print("O texto possui <b>".str_word_count($lorem)."</br> palavras<br>");	
	print("O texto possui <b>".strlen($lorem)."</b> caracteres <br>");

	print("<h1>Questão 5</h1>");

	print ucwords(strrev($lorem));