<?php
$diasemana = date("N");

if ($diasemana == 6 || $diasemana == 7) {
    print("Hoje é fim de semana");
}
else {
    print("Hoje é dia útil");
}