<form action="ex014-switchcase.php" method="GET">
    Digite uma letra: <input type="text" name="letra">
    <button type="submit">Enviar</button>
</form>
<?php
switch (@$_GET["letra"]) {
    case "A":
        print("Excelente");
        break;
        case "B":
            print("Bom");
            break;
        case "C":
            print("Regular");
            break;
        case "D":   
            print("Insuficiente");
            break;
        case "E":  
            print("Reprovado");    
}