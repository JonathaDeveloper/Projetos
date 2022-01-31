<?php

require_once("CadastroBasico.php");

class CadastroCompleto extends Cadastro{
    private string $end_rua;
    private string $end_bairro;
    private string $end_cidade;

    function __construct($nome, $cpf, $email, $end_bairro, $end_cidade, $end_rua){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->end_rua = $end_rua;
        $this->end_bairro = $end_bairro;
        $this->end_cidade = $end_cidade;
    }

    public function getCadastro(){
        return " {$this->nome} \r\n
                 {$this->cpf} \r\n
                 {$this->email} \r\n
                 {$this->end_rua} \r\n
                 {$this->end_bairro} \r\n
                 {$this->end_cidade} \r\n";
    } 
}

$x = new CadastroCompleto('Jonatha',5555,'ada@ada.xom','Rua Central', 'Centro', 'Porto Franco - MA');

echo($x->getCadastro());