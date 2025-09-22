<form action="variavel.php" method="post">
A <input type="number" name="a">
B <input type="number" name="b">
<button type="submit">Enviar</button>
</form>

<?php
	$a = $_REQUEST['a'];
	$b = $_REQUEST['b'];

	$c = $a * $b;

	print($c);