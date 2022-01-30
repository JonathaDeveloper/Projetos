<?php

require_once("class_pai.php");

class Combo extends Lanches{

    public function __construct($descricao, $lanche){
        parent::__construct($descricao, $lanche);
        foreach($lanches as $lanche){
            if (! $lanche instanceof Lanches) {
                throw new Exception('Elements of $entrees must be Lanches object');
            }
        }
    }



    public function temIngredientes($ingredientes){
        foreach($this->ingredientes as $combo){
            if ($combo->temIngredientes($ingredientes)){
                return true;
            }
        }
        return false;
    }
}

// Inserirndo prato
$especial = new Combo('Torta_Frango', array('frango','creme'));
$coca = new Combo('Coca-cola', array('gas','liquido preto'));
// Listando ingredientes do prato
foreach($especial->ingredientes as $i){
    print "($especial->descricao)$i \n";
}
//
$combo = new Combo('Especial + Coca', array($especial, $coca));

foreach(['gas','frango'] as $ing){
    if ($combo->temIngredientes($ing)) {
        print "\n Podemos fazer seu comnbo pois temos os $ing \n";
    }
}