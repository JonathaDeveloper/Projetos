<?php
// usando in_array

$foods = array(
    'Pastel' => 8.00,
    'Coxinha' => 5.00,
    'Biscoito' => 3.00, 
    'Ref' => 2.50
);

// quero algo que custe apenas 2,5

if (in_array(2.5, $foods)){
    $valorX = in_array(2.5, $foods); // Usei essa varial apenas para perceber que o valor é 1 "verdadeiro"
    print "Temos sim um produto com esse valor $valorX" . "\n";
} else print "Não temos com esse valor";