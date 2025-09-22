<form action="ex001.php"method="GET">
    Digite um número <input type="number"name="numero">
    <button type="submit">Enviar</button>
</form>

<?php
    $numero = $_GET['numero'];
    if ($numero %2 == 0) {
        print("Este número é par!");
    }
    else {
        print("Este número é impar!");
    }