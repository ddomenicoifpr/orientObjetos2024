<?php
    echo "WHILE\n";
    $num = 1;
    while($num <= 10) {
        echo $num . "\n";
        //$num = $num + 1;
        $num++;
    }

    echo "\n\nDO-WHILE\n";
    $num = 1;
    do {
        echo $num . "\n";
        $num++;
    } while($num <= 10);

    echo "\n\nFOR\n";
    for($num=1; $num<=10; $num++) {
        echo $num . "\n";
    }