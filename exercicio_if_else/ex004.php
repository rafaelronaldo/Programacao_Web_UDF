<form action="ex004.php"method="GET">
    Digite um nome <input type="text"name="nome">
    <button type="submit">Enviar</button>
</form>

<?php
$nome = $_GET["nome"];
$primeiraletra = substr($nome, 0, 1);
$primeiraletraminuscula = strtolower($primeiraletra);

if ($primeiraletraminuscula == "a") {
    print("O nome começa com A\n");
}
else {
    print("O nome não começa com A\n");
}

