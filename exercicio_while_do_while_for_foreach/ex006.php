<form action="ex006.php" method="GET">
    Digite um número: <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = $_GET["numero"];

do {
    print ($numero . "<br>");
    $numero--;
} while($numero >=0);