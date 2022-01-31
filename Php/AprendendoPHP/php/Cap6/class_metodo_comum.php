<?php

class Cadastros{

    public string $nome;
    public int $cpf;

    // método

 function cadastrarCliente(string $nome, int $cpf) {
    $this->nome = $nome;
    $this->cpf = $cpf;
    return ("\n NOME: $this->nome\n CPF: $this->cpf \n");
    }

}

$cadastrar = new Cadastros;

echo($cadastrar->cadastrarCliente('Jonatha',1023565));
