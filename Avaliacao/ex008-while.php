<form action="ex008-while.php" method="POST">
    Digite um número <input type="number" name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
    $numero = $_POST["numero"];
    $contador = 1;
    while ($contador <= 10) {
        $resultado = $numero * $contador;
        print("$numero x $contador = $resultado <br>");
        $contador++;
    }
    