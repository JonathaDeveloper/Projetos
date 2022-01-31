<?php

$anoNascimento = 2005;
$anoAtual = 2022;
$acompanhado = 'S';

// valida maior idade
if (($anoAtual - $anoNascimento) >= 18 || ($anoAtual - $anoNascimento) > 15 && $acompanhado == 'S'){
    print "Seja bem vindo você pode entrar";
} else {
    print "Desculpe você não pode entrar";
}


?>