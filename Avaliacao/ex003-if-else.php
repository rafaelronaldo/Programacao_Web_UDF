<form action="ex003-if-else.php"method="GET">
    Digite algo <input type="text"name="algo">
    <button type="submit">Enviar</button>
</form>

<?php
$algo = $_GET["algo"];
if ($algo == strtoupper ($algo)) {
    print("A string está toda em maiúscula.");
} 
elseif ($algo == strtolower ($algo)) {
    print("A string está toda em minúscula.");
} 
else {
    print("A string está em maiúscula e minúscula.");
}   