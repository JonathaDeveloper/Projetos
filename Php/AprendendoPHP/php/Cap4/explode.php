<?php
// utilizanso explode contrario de implode (defina o separador e mostre na posição desejada)

$listaPessoas2 = 'Ada, Andrea, Bruno, Celso';

$mostraLista2 = explode(', ', $listaPessoas2);

print ("mostra lista $mostraLista2[1]" . "\n \n");