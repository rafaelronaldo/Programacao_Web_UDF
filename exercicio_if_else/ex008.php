<form action="ex008.php" method="POST">
    Ano <input type="number" name="ano">
    <button type="submit">Enviar</button>
</form>

<?php
 $ano = $_POST["ano"];
if (date("L", strtotime("$ano-01-01"))) {
    print ("$ano é um ano bissexto");
}
else {
    print("$ano não é um ano bissexto");
}