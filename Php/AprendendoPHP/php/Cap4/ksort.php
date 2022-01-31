<?php

// utilizando ksort

echo ("--- Mostrando array com KSORT - ordena pela chave---" . "\n");

ksort($listaTratores);

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}

// lembrando que existe os rsort , arsort() e krsort() - "forma decrescente"