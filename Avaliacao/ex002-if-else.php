<form action="ex002-if-else.php" method="GET">
    Digite sua idade: <input type="number" name="idade">
    <button type="submit">Enviar</button>
</form>
<?php

$idade = $_GET["idade"];

if ($idade < 12) {
    print("Criança");
}
elseif ($idade >= 12 && $idade <= 17) {
    print("Adolescente");
}
else {
    print("Adulto");
}