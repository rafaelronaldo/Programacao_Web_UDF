<form action="ex004.php" method="GET">
    Qual é o seu palpite? <input type="number" name="palpite">
    <button type="submit">Enviar</button>
</form>

<?php
    $numero_secreto = 20;
    $palpite = $_GET["palpite"];

do {
    if ($palpite == $numero_secreto) {
    print("Parabéns! Você acertou o número secreto!");
} 
else {
    print("Errou! Tente novamente");
    break;
}
} while ($palpite != $numero_secreto);