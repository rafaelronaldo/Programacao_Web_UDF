<form action="ex005-if-else.php"method="POST">
    Login <input type="text"name="login">
    Senha <input type="password"name="senha">
    <button type="submit">Enviar</button>
</form>

<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    if ($login == "admin"    && $senha == 1234) {
        print("Acesso permitido!");
    }
    else {
        print("Acesso negado!");
    }