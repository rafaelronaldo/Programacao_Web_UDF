<form action="ex011-dowhile.php" method="GET">
    Digite um número: <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php

$numero = $_GET["numero"];

do {
    print ($numero . "<br>");
    $numero--;
} while($numero >=0);