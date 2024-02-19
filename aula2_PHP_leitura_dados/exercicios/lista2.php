<?php
    $total = 0;
    do {
        $valor = readline("Informe o valor: ");
        $total += $valor;
    } while($valor != 0);

    printf("O valor total arrecadado para o churrasco é R$ %.2f\n", $total);