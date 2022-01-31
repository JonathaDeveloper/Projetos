<?php

class Lanches {
    public $descricao;
    public $ingredientes = array();

    public function __construct($descricao, $ingredientes) {
        if (! is_array($ingredientes) ){
            throw new Exception('$ingredientes deve está como um array');
        }
        $this->descricao = $descricao;
        $this->ingredientes = $ingredientes;
    }

    public function temIngredientes($ingredientes){
        return in_array($ingredientes, $this->ingredientes);
    }
}