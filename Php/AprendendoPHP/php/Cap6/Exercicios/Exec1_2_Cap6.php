<?php

/*
1. Crie uma classe chamada Ingredient. Cada instância dessa classe representa um único ingrediente.
A instância deve registrar o nome do ingreditente e seu custo.
*/

class Ingredient {
    private string $name;
    private float $price;

    public function setIngredient($name, $price){
        $this->name = $name;
        $this->price = $price;

        return "Intem cadastrado com sucesso! \n";
    }

    public function getIngredient(){
        return "Ingrediente: {$this->name} \n" . "Valor: {$this->price} \n";
    }
    /*
    2. Adicione um método à classe IngredientCost que altere o custo de um ingrediente;
    */
    public function IngredientCost($name, $newPrice){
            if ($name === $this->name){
                $this->price = $newPrice;
            } else return "Desculpe não encontramos esse item \n";
    }
    

}
// Exec_1
$x = new Ingredient;

echo($x->setIngredient('milho',1.5));

echo($x->getIngredient());
// Exec_2
echo($x->IngredientCost('milhos', 2.5));

echo($x->getIngredient());