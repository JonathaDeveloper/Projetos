<?php

class Carros {
    private string $nome;
    private $contem = array();

    function __construct($nome, $contem){
        if (! is_array($contem)) {
            throw new Exception("Erro: $contem deve ser um array");
        }
        $this->nome = $nome;
        $this->contem = $contem;
    }

    public function cad($caracteristicas){
        return in_array($caracteristicas, $this->contem);
    }
}

$carro1 = new Carros('Gol', array('Vermelho', 'Arcondicionado', 'Vidroeletrico'));

echo($carro1->cad('Vermelho'));

foreach($carro1->contem as $i){
    print "($carro1->nome)$i \n";
}
