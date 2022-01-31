<?php
// utilizando asort - classifica o arry pelo valor do elemento

$listaTratores = array(
    600 => 'valtra',
    5000 => 'massey ferguson',
    1000 => 'john deere'
);

echo ("--- Mostrando array normal S/ASORT ---" . "\n");

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}

echo ("--- Mostrando array com ASORT - ordena pelo maior valor ---" . "\n");

asort($listaTratores);

foreach($listaTratores as $key => $value){
    print "\$listaTratores : $key - $value " . "\n";
}