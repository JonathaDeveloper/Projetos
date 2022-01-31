<?php


$foods = array(
    'Pastel' => 8.00,
    'Coxinha' => 5.00,
    'Biscoito' => 3.00, 
    'Ref' => 2.50
);


// usando array_search() - diferente do in_array ele não retorna apenas 1 , e sim o valor do array caso seja verdade

if (array_search(5, $foods)){
    $valorY = (array_search(5, $foods));
    print "Temos sim um produto com esse valor é o produto: $valorY" . "\n";
} else print "Não temos com esse valor";