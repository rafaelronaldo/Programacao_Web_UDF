<form action="ex009.php" method="POST">
    Primeira Palavra <input type="text" name="palavra1">
    Segunda Palavra <input type="text" name="palavra2">
    <button type="submit">Enviar</button>
</form>

<?php
$palavra1 = $_POST["palavra1"];
$palavra2 = $_POST["palavra2"];

if ($palavra1 == $palavra2) {
    print("As palavras são iguais");
}
elseif (strlen($palavra1) > strlen($palavra2)) {
    print("A primeira palavra é maior");
}
elseif (strlen($palavra2) > strlen($palavra1)) {
    print("A segunda palavra é maior");
}