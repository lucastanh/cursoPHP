<?php

$cont = 0;
while ($cont < 10) {
    $cont++;
    
    if($cont % 2 === 0) {
        continue;
    } 

    echo $cont;

    // if($cont === 3) {
    //     break;
    // }

}