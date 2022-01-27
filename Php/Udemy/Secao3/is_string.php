<?php

// Validação de string


$nome1 = 'Joao';

if (is_string($nome1)) {
    print "$nome1 é String \n";
} else {
    print "$nome1 Não é String";
}

$nome2 = "Maria";

if (is_string($nome2)) {
    print "$nome2 é String \n";
} else {
    print "$nome2 Não é String";
}
$nome3 = 400;

if (is_string($nome3)) {
    print "$nome3 é String \n";
} else {
    print "$nome3 Não é String";
}