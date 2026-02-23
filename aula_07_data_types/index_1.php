<?php

    // DATA TYPES - tipos de dados

    // As variáveis(assim como as constantes) guarda valores de um determinado tipo.
    // No PHP as variáveis não são tipadas.
    // Isso vai ser mais complexo de processar e pode gerar erros

    // ---------------------------------------------------
    // Tipos de dados ESCALARES

    // bool / boleano -aceita valores verdadeiro ou falso
    $apresentar_dados = true;

    // int / inteiros - são valores numéricos sem casas decimais
    $valor = 0;
    $valor1 = 12512765;
    $valor2 = -34676;

    // float - valores flutuantes( números com casas decimais)
    $float1 = 1.5;
    $float2 = 2356.345;
    $float3 = 0.0035;
    $float4 = -0.4;

    // string - valores alfanuméricos (letras, palavras, frases, textos, ...)
    $nome = "João";
    $sobrenome = 'Gomes';
    $letras_escolhda = 'A';
    $frase_do_dia = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';

    // ---------------------------------------------------

    echo $apresentar_dados . "<br>";
    echo '------------------------------' . "<br>";
    echo $valor . "<br>";
    echo $valor1 . "<br>";
    echo $valor2 . "<br>";
    echo '------------------------------' . "<br>";
    echo $float1 . "<br>";
    echo $float2 . "<br>";
    echo $float3 . "<br>";
    echo $float4 . "<br>";
    echo '------------------------------' . "<br>";
    echo $nome . "<br>";
    echo $sobrenome . "<br>";
    echo $letras_escolhda . "<br>";
    echo $frase_do_dia . "<br>";
    echo '------------------------------' . "<br>";

    // apresentar os tipos de cada variável
    echo gettype($apresentar_dados) . "<br>";
    echo gettype($valor) . "<br>";
    echo gettype($float1) . "<br>";
    echo gettype($nome) . "<br>";

    echo '------------------------------' . "<br>";
    // apresentar informações da variável
    var_dump($apresentar_dados);
    echo "<br>";
    var_dump($valor1);
    echo "<br>";
    var_dump($nome);