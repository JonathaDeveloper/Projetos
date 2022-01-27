<?php

$variavelGlobal = "Jonatha";

echo "Global : $variavelGlobal \n <br/>";

function funcaoLocal(){
    global $variavelGlobal;

    $variavelGlobal = "Katarina";

    return "O retorno da funcao: $variavelGlobal \n <br/>";
}

echo(funcaoLocal());

?>