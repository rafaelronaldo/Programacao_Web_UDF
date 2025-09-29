<form action="ex002.php"method="POST">
    Digite um número <input type="number"name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
    $numero = $_POST["numero"];
    $contador = 1;
    while ($contador <= $numero) {
        print("$contador ");
    }