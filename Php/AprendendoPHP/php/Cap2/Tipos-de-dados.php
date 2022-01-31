<?php

# Capitulo 2 - Dados: trabalhando com texto e números

// Obs: Vou está utilizando sempre o :  . "<br/>"; apenas para ficar mais legivel , é minha forma de está fazendo quebra de linhas
// Obs2: Caso esteja utilizando a execução no navegador utilize <br/> caso seja no console ou terminal utlize /r/n

// Para declarar uma variavel basta iniciar com $

// Exemplo 1 String (Texto):

$nome = 'Jonatha';

// Imprimindo o nome 

echo($nome . "<br/>");

// Exemplo 2 Inteiro (numerico):

$idade = 29;

// imprimindo a idade

echo($idade . "<br/>");


// Exemplo 3 Decimal (numerico):

$valor = 10.50;

// imprimindo o valor

echo($valor . "<br/>");

// Exemplo 4 Verdadeiro ou Falso (boolean)

// para isso valos utilizar a função var_dump((bool)) para validar se os valores são verdadeiros ou falsos

// Exemplo de verdadeiro e falso com numeros:  Caso um numero seja zero (0) é falso se for negativo ou positivo será verdadeiro

$n1 = 0;
$n2 = -50;

var_dump((bool)$n1);
var_dump((bool)$n2);

// Exemplo de verdadeiro e falso com textos:  Caso um texto seja vazio null, será falso do contrario verdade


$v1 = "0";
$v2 = "";
$v3 = array();
$v4 = 'Jonatha';

var_dump((bool)$v1);
var_dump((bool)$v2);
var_dump((bool)$v3);
var_dump((bool)$v4);

?>