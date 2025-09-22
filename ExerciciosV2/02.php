<form action="02.php" method="GET">
	A <input type="number" name="a">
	B <input type="number" name="b">
	<button type="submit">Enviar</button>
</form>

<?php
$a = $_GET['a'];
$b = $_GET['b'];

$c = $a + $b;
print("$a + $b = $c <br>");

$c = $a - $b;
print("$a - $b = $c <br>");

$c = $a * $b;
print("$a * $b = $c <br>");

$c = $a / $b;
print("$a / $b = $c <br>");

$c = $a % $b;
print("$a % $b = $c <br>");

$c = $a ** $b;
print("$a<sup>$b</sup> = $c <br>");
