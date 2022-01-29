<?php

class Cadastros2{

    public  $nome;
    public  $cpf;

    // método

  public function __construct($nome, $cpf) {
    $this->nome = $nome;
    $this->cpf = $cpf;
    }
  public function getCadastros2(){
        return "Nome: {$this->nome} " . "\r\n <br/> \r\n". "CPF: {$this->cpf}";
    }

}

$cadastrar2 = new Cadastros2('Jonatha',050505);

print "{$cadastrar2->getCadastros2()}";
