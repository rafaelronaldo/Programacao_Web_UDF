<form action="ex001-if-else.php" method="GET">
    Digite um número: <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = $_GET["numero"];
if ($numero > 1) {
    print("Este número é positivo!");
}
elseif ($numero < 0) {
    print("Este número é negativo!");
}
else {
    print("Este número é zero!");
}