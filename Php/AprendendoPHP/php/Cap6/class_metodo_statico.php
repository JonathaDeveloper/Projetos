<?php

class Cadastros3 {
    public string $nome;
    public int $cpf;
    public int $n1 = 5;
    public int $n2 = 5;

    public static function funcaoEstatica(){
        $n1 = 10;
        $n2 = 30;
        $soma = $n1 + $n2;
        return $soma;
    }
}
$cadastroEstatico = Cadastros3::funcaoEstatica();

echo($cadastroEstatico);
