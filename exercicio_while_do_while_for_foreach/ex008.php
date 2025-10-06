<form action="ex008.php" method="GET">
    Digite um número: <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
    $numero = $_GET["num"];
    $fatorial = 1;

    for ($i = $num; $i >= 1; $i--) {
        $fatorial *= $i;
    }

   print ("<p>O fatorial de $num é $fatorial.</p>");