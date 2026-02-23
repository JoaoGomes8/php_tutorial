<?php

    // BOOLEANS

    // são variaveis com dois valores possiveis: true ou false

    $apresentar_nome = true;
    $apresentar_idade = false;

    // os valores são case sensitive
    $mostrar = TRUE; // o mesmo que $mostrar = true;

    // são variaveis usadas maioritariamente em
    // estruturas de controlo do fluxo do código:
    // ciclos (loops) e instruções condicionais

    // veremos nessa altura que podemos converter valores booleanos.
    // tradicionalmente, o valor zero(0) é equivalente a false a todos
    // os outros valores são equivalentes a true.

    // podemos ainda determinar se uma variável é bolleana ou não
    var_dump(is_bool($mostrar));