<?php

$n1 = (int) "12";

echo $n1;
echo "\n <br/> \n";
echo $n1 + 10;
echo "\n <br/> \n";
echo(gettype($n1));// é realmente inteiro?
echo "\n <br/> \n";
if ($n1 === 12){
    echo "O valor digitado é inteiro";
} else "O valor digitado não é inteiro";


$n2 = (float) "3.144444";

$n3 = (string) 34;
echo "\n <br/> \n";
echo(gettype($n2));
echo "\n <br/> \n";
echo(gettype($n3));

?>