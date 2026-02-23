<?php

    // Constantes
    // ao contrário das variáveis, as constantes têm valores que não podem ser alterados.

    // definir uma constante
    define("nome", "João");

    // por convenção, as constantes são nomeadas com letras maiúsculas
    define('TAXA_FIXA', 10);
    define('APRESENTAR_DADOS', false);

    // apresentar o valor da constante
    echo TAXA_FIXA; // 10

    // usar o valor de uma constante
    $preco_inicial = 500;
    $preco_final = $preco_inicial + TAXA_FIXA;
    echo $preco_final; // 510

    // Não podemos alterar o valor de uma constante
    // TAXA_FIXA = 20; // Isso causará um erro
    