<?php

// Referencia o mesmo ponto da memoria


$x = 10;

$y =& $x;

echo $x;
echo "\n <br>";
echo $y;
echo "\n <br>";

$y = 15;

echo $y;
echo "\n <br>";

$x = 20;

echo "\n <br>";
echo $x;
echo "\n <br>";
echo $y;

?>