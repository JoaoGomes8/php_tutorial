<?php

    // INTEIROS

    // podemos transformar variaveis fazendo 'cast' para inteiros

    $valor_str = "145";
    $valor_int = (int) $valor_str;
    // ou
    $valor_int_1 = (integer)$valor_str;

    echo $valor_int . "<br>";
    echo $valor_int_1 . "<br>";

    // conversoes de string para inteiro
    echo (int)'100';
    echo "<br>";
    echo (int)'25teste';
    echo "<br>";
    echo (int)'teste';

    // podemos verificar se a variavel é inteira
    echo "<br>";

    $final = 100;
    var_dump(is_int($final)); // true

    // e ainda podemos definir valores inteiros desta forma:
    echo "<br>";
    $outro_valor = 1_500_000;  // o underscore é ignorado, apenas para facilitar a leitura
    echo $outro_valor;