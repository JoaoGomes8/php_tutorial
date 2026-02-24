<?php

    // FLOATS

    // Tal como os inteiros, o valor minimo e máximo depende da plataforma

    echo PHP_FLOAT_MIN;
    echo '<br>';
    echo PHP_FLOAT_MAX;
    echo '<br>';

    // Infinity - INF - O valor é demasiado elevado para ser apresentado
    $valor = PHP_FLOAT_MAX * 2;
    echo $valor;
    echo '<br>';
    var_dump($valor);

    // converter para float
    echo '<br>';
    $valor = 10;
    $valor_float = (float) $valor;
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);

    // ou ainda
    echo '<br>';
    $valor_float = floatval($valor);
    echo $valor_float;
    echo '<br>';
    var_dump($valor_float);