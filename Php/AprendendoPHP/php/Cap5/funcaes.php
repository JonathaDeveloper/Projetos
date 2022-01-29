<?php

#Grupos de lógica: funções e arquivos

// declarando uma função

function minhaFuncao() {
    print "Estou imprimindo a função: minhaFuncao()";
}

echo (minhaFuncao());

// argumento "Passar paramentro"

function funcaoArgunmento($seuNome){
    print "\n" . "Imprime seu nome: $seuNome" . "\n";
}

echo(funcaoArgunmento('Jonatha'));

//  funcao valida senha

function validaSenha($senha){
    if(strlen(trim($senha)) == 3 && $senha == 123){
        print " \n Parabens sua senha está correta ! \n";
    } else {
        print "\n senha incorreta \n";
    }
}

echo (validaSenha(123));

// funcao Calcula idade

function calculaIdade(int $ano1, int $ano2){
    if(strlen(trim($ano1)) == 4 && strlen(trim($ano2)) == 4 && $ano2 > $ano1){
        $idade = $ano2 - $ano1;
        print ("\n Sua idade é: $idade \n");
    } elseif(strlen(trim($ano1)) != 4 || strlen(trim($ano2))){
        print "\n Olha você informou um ano diferente de 4 digitos, por favor digitar novamente \n";
    } else {
        print "\n Informação invalida \n";
    }
}

echo(calculaIdade(1993,2022));


// funcao com retorno


function calcula(int $n1, int $n2){
    $total = $n1 + $n2;

    return $total;
}

echo(calcula(10,10));

// funcao com varios retornos


function calcula2($n1, $n2){
    $soma = $n1 + $n2;
    $multiplica = $n1 * $n2;

    return array($soma, $multiplica);
}

// dois retornos

function verSaldo($saldo){
    if($saldo > 0){
        return "\n Você tem $saldo de saldo\n";
    } else {
        return "\n Você não tem saldo \n";
    }
}

echo(verSaldo(0));


// 

function cafe($valor1, $valor2){
    if ($valor1 < $valor2){
        return false;
    } else {
        $valor = $valor1 / $valor2;
        return $valor;
    }
}

echo(cafe(2,3));