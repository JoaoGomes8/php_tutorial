<?php

    // ARRAYS

    // Podemos alterar valores de um array usando as chaves

    $nomes = ["joao", "ana", "carlos"];

    $nomes[1] = "cristina";

    // podemos ver o array com var_dumb
    var_dump($nomes);

    // ou de uma forma mais fácil de ler
    echo '<pre>';
    print_r($nomes);
    echo '</pre>';
    