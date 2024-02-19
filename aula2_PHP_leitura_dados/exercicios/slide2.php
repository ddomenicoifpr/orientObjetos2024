<?php
    $num = readline("Informe um número: ");
    for($i=$num-1; $i>0; $i--)
    if($i > 1)
        echo $i . ", ";
    else
        echo $i . "\n";