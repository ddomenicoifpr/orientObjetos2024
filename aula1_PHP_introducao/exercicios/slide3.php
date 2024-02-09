<?php
    echo "Números de 1 a 50 divisíveis por 3:\n";

    for($i=1; $i<=50; $i++) {
	if(($i % 3) == 0)
		echo $i . "\n";
    }
