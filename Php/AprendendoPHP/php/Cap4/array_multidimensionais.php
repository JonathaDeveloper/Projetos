<?php
# array multidimensionais

// 1º - forma

$pratos = array(
    'Arroz especial' => ['Arroz','Cebolinha'],
    'Caldo velho' => ['Caldo quente', 'Carne vermelha'],
    'Carne seca' => ['Carne de sol', 'Tempero especial'],
    'Cuscuz top' => ['Cuscuz', 'Sal']
);

print "\n" . $pratos['Caldo velho'][0] . "\n\n"; // Mostrar array 1 posicao 0

foreach($pratos as $chave => $valor){
    foreach($valor as $item => $composicao){
        print " \$pratos: $chave - Item -> $item --> $composicao" . "\n";
    }
}

// 2º - forma

$estoque2 = [[3,'Leite',50],
             [4,'Nescal',20],
             [5,'Toddy',0],
             [6,'Produto sem estoque']];

print "\n" . $estoque2[2][1]; // Mostrar o array 2 na posicao 1 

// 3º - forma

$estoque3 = array('Grupo_I' => array('Banana' => 100,'Manga' => 200),
                  'Grupo_II' => array('Melancia' => 10,'Melao' => 300),
                  'Grupo_III' => array('Uva' => 1500,'Cereja' => 250));

print "\n" . $estoque3['Grupo_I']['Manga']; // Mostrar o valor de Manga do Grupo_I

// utilizando foreach com array multidimensional

foreach($estoque3 as $grupo => $key){
    foreach($key as $itens => $valor){
        print "\n" . " \$estoque3 : $grupo -> $itens -> $valor" . "\n";
    }
}

// utilizando for para array multidimensional

$carros = array( array('Gol', 'Uno', 'Celta'),
                 array('Saveiro','Strada','Montana'));

for($contador = 0, $tamanho = count($carros); $contador < $tamanho; $contador++){
    for($novoContador = 0, $novoTamanho = count($carros[$contador]); $novoContador < $novoTamanho; $novoContador++){
        print "Lista: [$contador][$novoContador] -> {$carros[$contador][$novoContador]}\n";
    }
}
