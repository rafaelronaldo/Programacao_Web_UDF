<form action="ex016-switchcase.php" method="GET">
    Digite a faixa etária (criança, adolescente, adulto, idoso): <input type="text" name="faixa">
    <button type="submit">Enviar</button>
</form>

<?php

switch (@$_GET["faixa"]) {
    case "criança":
        print("0 a 11 anos");
        break;
    case "adolescente":
        print("12 a 17 anos");
        break;
    case "adulto":
        print("18 a 59 anos");
        break;
    case "idoso":
        print("60 anos ou mais");
        break;
}