<form action="ex002.php"method="GET">
    Qual sua idade? <input type="number"name="idade">
    <button type="submit">Enviar</button>
</form>

<?php
$idade = $_GET["idade"];
if ($idade >=18) {
    print("Adulto");
}
elseif ($idade >= 12 && $idade <= 17) {
    print("Adolescente");
}
else {
    print("Criança");
}