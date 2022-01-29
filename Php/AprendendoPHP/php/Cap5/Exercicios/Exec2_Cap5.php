<?php

/*
2. Modifique a função do exercicio anterior para que só o nome do arquivo
seja passado para ela no argumento de URL. Dentro da função, adicione uma
variável global na frente do nome do arquivo para tornar o URL completo.
Por exemplo, se você passar photo.png para a função, e a variável global
converter /imagens/, o atributo src da tag <img> retornará /imagens/photo.png.
Uma função como essa é uma maneira fácil de manter a tags da sua imagem corretas,
mesmo se as imagens passarem para um novo caminho ou servidor. Apenas altere a variavel
global - por exemplo, de /imagens/ para http://imagens.exemple.com/.
*/
//<img src="1.png" alt="Lopes Apresentacao" height="900" width="400"/>
$diretorio = 'imagens/';

function iniciaHTML(){
    print "<!DOCTYPE html>
                <html lang=\"pt\">
                    <head>
                        <title>Exercicio1_Cap5</title>
                            </head>
                                <body>" . "<br/>" . "\r\n";
}

function finalizaHTML(){
    print "<br/>" . "\r\n" . "</body></html>"; 
}

function modificaIMG($url){

    global $diretorio;

    $html .= '<img src="' . $diretorio . $url . '" alt="Lopes Apresentacao" height="400" width="400"/>';

    return $html;

}
echo(iniciaHTML());
echo(modificaIMG('2.jpeg'));
echo(finalizaHTML());

?>