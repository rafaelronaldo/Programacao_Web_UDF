<form action="ex013-switchcase.php" method="GET">
    A<input type="number" name="a">
    <select name="opcao">
        <option value="som">( + )</option>
        <option value="sub">( - )</option>
        <option value="mul">( * )</option>
        <option value="div">( / )</option>
    </select>
    B <input type="number" name="b">
    <button type="submit">Enviar</button>
</form>

<?php
$a = $_GET["a"];
$b = $_GET["b"];
$op = $_GET["opcao"];

switch ($op) {
    case"som":
        $resultado = $a + $b;
        print("$a + $b = $resultado");
        break;
    case"sub":
        $resultado = $a - $b;
        print("$a - $b = $resultado");
        break;
    case"mul":
        $resultado = $a * $b;
        print("$a * $b = $resultado");
        break;
    case"div":
        $resultado = $a / $b;
        print("$a / $b = $resultado");
}