<?php
// chama classe conta
require_once("Conta.php");

//cria conta
$novaConta = new Conta('Andrea','santos@teste.com',123,321,7777);
// mostra conta [valida usuario e senha]
print "{$novaConta->getConta('Andrea',123)}";
// deposita
$novaConta->depositarConta(100);
// mostra conta [valida usuario e senha]
print "{$novaConta->getConta('Andrea',123)}";
// saque da conta [valida usuario e senha]
echo($novaConta->sacarConta('Andrea',123,88));