<?php
// utilizando global

$saldo = 1;

function deposita(int $valor){
    global $saldo;
    $saldo += $valor;
    return "\n" . $saldo;
}

echo(deposita(100));

// outra maneira de usar varias variaveis globais.
$nome;
$sobrenome;
$email;

function cadastro($fnome, $fsobrenome, $femail){
    global $nome, $sobrenome, $email;

    $nome = $fnome;
    $sobrenome = $fsobrenome;
    $email = $femail;

    //return "\n" . array($nome, $sobrenome, $email);
    //return [$nome, $sobrenome, $email];

    return "\n $nome $sobrenome - $email \n";
}

echo(cadastro('Jonatha','Araujo','jonathaemulador@gmail.com'));
