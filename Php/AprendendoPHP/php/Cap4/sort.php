<?php
// usando sort


$veiculos = array('Moto','Carro','Caminhao');
$veiculosPreco = array('Moto' => 1000,'Carro' => 2000,'Caminhao' => 3000);

echo " ----MOSTRA ARRAY---- \n";

foreach($veiculos as $tipo => $valor){
    print (" \$veiculos: $tipo  - $valor" . "\n");
}

echo " ----MOSTRA ARRAY ASSOCIATIVO---- \n";

foreach($veiculosPreco as $tipo => $valor){
    print (" \$veiculosPreco: $tipo  - $valor" . "\n");
}

echo "\n";

sort($veiculos);
sort($veiculosPreco);

echo " ----MOSTRA ARRAY C/SORT---- NÃO HOUVE MUDANÇA \n";

foreach($veiculos as $tipo => $valor){
    print (" \$veiculos: $tipo  - $valor" . "\n");
}

echo " ----MOSTRA ARRAY ASSOCIATIVO C/SORT ---- SUBIST. O VALOR STRING POR NUMERICO \n";

foreach($veiculosPreco as $tipo => $valor){
    print (" \$veiculosPreco: $tipo  - $valor" . "\n");
}