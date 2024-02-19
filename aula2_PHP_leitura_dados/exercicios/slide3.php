<?php
    for($i=0; $i<5; $i++) {
        $nome = readline("Informe o nome da pessoa: ");
        $peso = readline("Informe o peso da pessoa: ");
        $altura = readline("Informe altura da pessoa: ");

        $imc = $peso / ($altura * $altura);
        printf("%s tem peso %.2f, altura %.2f e IMC %.2f.\n\n", 
            $nome, $peso, $altura, $imc);
    }