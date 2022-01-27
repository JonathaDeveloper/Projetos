<?php

$nome = "João";
$idade = 31;

function validaJoao(){
    global $nome;
    global $idade;
    if ($nome === "João" && $idade == 30){
        return "Parabens você é o $nome ! " . "\n <br/>";
    } else return "Você não é João !";
}

echo(validaJoao());

?>