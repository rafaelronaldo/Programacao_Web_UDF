<form action="ex010-dowhile.php" method="GET">
    Digite a senha: <input type="password" name="senha">
    <button type="submit">Enviar</button>
</form>
<?php
$senha_correta = 9660;
$senha = $_GET["senha"];

do {
if ($senha == $senha_correta){
    print("Acesso Permitido!");
    break;
}
else {
    print("Acesso negado!");
    break;
}
} while ($senha != $senha_correta);