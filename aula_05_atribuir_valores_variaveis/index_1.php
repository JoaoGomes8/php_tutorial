<?php

// ------------------------------------------------------------
// definir o nome e o valor de uma variável
$nome1 = "João";

echo $nome1;

// alterar o valor da variável
$nome1 = "Maria";

echo $nome1;

// -------------------------------------------------------------
// $nome2 = "Ana; // erro de sintaxe - falta a aspa dupla no final

$parcela1 = $parcela2 = $parcela3 = 100;

// --------------------------------------------------------------
$valor1 = 100;
$valor2 = $valor1;
echo $valor1; // 100
echo $valor2; // 100    

$valor2 = 200;

echo $valor1; // 100
echo $valor2; // 200

// ---------------------------------------------------------------
$valor3 = 100;
$valor4 = 300;
$valor5 = $valor3 + $valor4;

echo $valor5; // 400

// ---------------------------------------------------------------
// apresentar o valor de uma variável dentro de uma string
$nome = "João";
echo 'O meu nome é $nome'; // O meu nome é $nome
echo "O meu nome é $nome"; // O meu nome é João