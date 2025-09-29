<?php
    print ("<h1>Foreach</h1>");
    $frutas = array("Banana", "Maçã", "Morango", "Uva"); // O array coloca varios elementos em uma só variavel
    foreach ($frutas as $fruta) { // foreach é usado para imprimir os elementos da array
        print ("$fruta <br>");
    }

    print("<br>------------------------<br>");

    $alfabeto = range("A", "Z"); // O range funciona com letras e palavras
    foreach ($alfabeto as $letra) {
        print ("$letra ");
    }
    
    print("<h1>For</h1>");
    for ($contador = 1; $contador <= 10; $contador++) { // O for é usado quando se sabe o número de repetições
        print ("$contador ");
    }
    
    
    print ("<h1>Do While</h1>");
    $contador = 1;
    do { // O do while é usado quando não se sabe o número de repetições
        print ("$contador ");
        $contador++; // Incrementa o valor do contador
    } while ($contador <= 10); // Enquanto o contador for menor ou igual a 10, ele repete o bloco

    print ("<h1>While</h1>");

    $contador = 1;
    while ($contador <= 10) { // O while é usado quando não se sabe o número de repetições
        print ("$contador ");
        $contador++; // Incrementa o valor do contador
    }


