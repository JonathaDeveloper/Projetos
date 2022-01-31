<?php
// utilizando o array $GLOBALS

$variavelGlobal = 'Jonatha';
$telefone = 88888888;

function funcao1(){
    $varialvelLocal = 'Katarina';

    print ("\n $varialvelLocal é filha de " . $GLOBALS['variavelGlobal']);
}

function atualizaTelefone($novo){
    $GLOBALS['telefone'] = $novo;
    return "\n" . $GLOBALS['telefone'];
}


echo(funcao1());
echo(atualizaTelefone(77773333));