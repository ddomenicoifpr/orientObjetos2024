<?php
    echo "Anos bissextos entre 1980 e 2024\n";
    
    for($ano=1980; $ano<=2024; $ano++) {
    	if( ($ano % 4 == 0) && ( ($ano % 100 != 0) || ($ano % 400 == 0) ) )
    		echo $ano . "\n";
    }
