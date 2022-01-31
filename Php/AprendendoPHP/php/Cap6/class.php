<?php

class Pratos {
    public string $nome_prato;
    public $ingredientes = array();

    public function inserirIngredientes($ingredientes){
        return in_array($ingredientes, $this->ingredientes);
    }
}

$prato1 = new Pratos;

$prato1->nome_prato = 'Tradicional';
$prato1->ingredientes = array('Arroz','Feijao','Bife');

$prato2 = new Pratos;

$prato2->nome_prato = 'Fejoada';
$prato2->ingredientes = array('Feijao','Carnes Suinas','Derivados Suinos');
//
echo("\n --------------- \n");
// Exibir Ingredientes do prato 1
foreach($prato1->ingredientes as $i){
    print "($prato1->nome_prato)$i \n";
}
echo("\n --------------- \n");
// Exibir Ingredientes do prato 2
foreach($prato2->ingredientes as $i){
    print "($prato2->nome_prato)$i \n";
}

echo("\n --------------- \n");
// Eu quero pratos que contenham os seguintes ingredientes
foreach(['Arroz','Feijao','Bife'] as $ing){
    if ($prato1->inserirIngredientes($ing)) {
        print "O prato (Tradicional) contem : $ing \n";
    }
    if ($prato2->inserirIngredientes($ing)) {
        print "O prato (Feijoada) contem : $ing \n";
    }
}

