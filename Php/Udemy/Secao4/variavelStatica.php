<?php

function local(){

    $valor = 0; // imprime apenas o valor declarado

    $valor++;

    return "Local: ($valor) \n <br/> \n";
}


echo(local());
echo(local());
echo(local());


function estatica(){

    static $valor = 0; // Torna sequencial todas as chamados

    $valor++;

    return "Estatica: ($valor) \n <br/> \n";

}

echo(estatica());
echo(estatica());
echo(estatica());



?>