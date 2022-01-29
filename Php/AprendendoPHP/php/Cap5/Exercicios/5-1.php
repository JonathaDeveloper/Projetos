<?php

/*
Crie uma função que retorne uma tag HTML <img />. A função deve aceitar um argumento obrigatorio com o
URL da imagem e os argumentos opcionais alt para texto, height, e width.
*/

function html_img($url, $alt = null, $height = null, $width = null){

    $html = '<img src="' . $url . '"';

    if (isset($alt)) {
        $html .= ' alt="' . $alt . '"';
    }
    if (isset($height)) {
        $html .= ' height="' . $height . '"';
    }
    if (isset($width)) {
        $html .= ' width="' . $width . '"';
    }

    $html .= '/>';
    return $html;
}
print "<!DOCTYPE html>
         <html lang=\"pt\">
          <head>
           <title>Exercicio1_Cap5</title>
            </head>
             <body>" . "<br/> \n";

echo(html_img('1.png','Nao Carregou','900','400'));

print "\n <br/> </body></html>";

