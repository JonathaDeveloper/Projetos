<?php

class Conta{
    // Dados acesso
    private string $usuario;
    private int    $senha;
    private string $email;
    // Dados conta
    private int    $conta;
    private int    $agencia;
    // Saldo conta
    private float  $saldo;

    function __construct(string $usuario, string $email, int $senha, int $conta, int $agencia){
        $this->saldo = 0;
        $this->usuario = $usuario;
        $this->email   = $email;
        $this->senha   = $senha;
        $this->conta   = $conta;
        $this->agencia = $agencia;
    }

    public function getConta($usuario, $senha){
        if ($this->usuario === $usuario && $this->senha === $senha){
            return "<br/> \r\n
                    Sr. : {$this->usuario}
                    <br/> \r\n
                    Conta : {$this->conta}
                    <br/> \r\n
                    Agencia : {$this->agencia}
                    <br/> \r\n
                    Saldo : {$this->saldo}";
        } else return "<br/> \r\n Não localizamos sua conta";
    }

    function depositarConta(float $valor){
        $this->saldo += $valor;
    }

    function sacarConta($usuario, $senha, float $valor){
        $this->usuario = $usuario;
        $this->senha   = $senha;
        
        if ($this->usuario === $usuario && $this->senha === $senha){
            if ($valor > 0 && $valor <= $this->saldo){
                $this->saldo -= $valor;
                return "\r\n" . "Valor do saque foi de : R$ $valor " . "Saldo em conta agora é de: " . $this->saldo;
            } else return "\r\n Saldo insuficiente para esse saque";
        } else return " \r\n Desculpe não localizamos sua conta";
    }
}