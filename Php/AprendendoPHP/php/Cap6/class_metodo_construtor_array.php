<?php

class Entree {
    public $name;
    public $ingredients = array();

    public function __construct($name, $ingredients) {
        if (! is_array($ingredients) ){
            throw new Exception('$ingredients deve está como um array');
        }
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function hasIngredients($ingredients){
        return in_array($ingredients, $this->ingredients);
    }
}

$soup = new Entree('Chicken Soap', array('chicken','water'));

foreach($soup->ingredients as $i){
    print "($soup->name)$i \n";
}

echo("\n ----------- \n\n");

try {
    $sandwich = new Entree('Chicken Sandwich', 'googd');
    foreach($sandwich->ingredients as $i){
        print "($sandwich->name)$i \n";
    }
} catch (Exception $e){
    return "Couldnt create the drink: " . $e->getMenssage();
}
