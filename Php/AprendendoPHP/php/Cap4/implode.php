<?php
// mostrar toda a lista do array com implode

$listaPessoas = array('Ada', 'Andrea', 'Bruno', 'Celso');

$mostraLista = implode(' , ', $listaPessoas);

print ("$mostraLista" . "\n");