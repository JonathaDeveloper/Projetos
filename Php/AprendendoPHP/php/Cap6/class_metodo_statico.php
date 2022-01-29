<?php



class PrecoProduto {
    public int $cod_prod;
    public string $descricao;
    public int $qtd;
    public float $custo_compra;

/*
Metodos estaticos não podem utilizar a variavel $this, já que não são
executados no contexto de uma instância de objeto especifico e sim na propria classe,
São importantes para finalidade dentro da classe e não para o objeto 
*/

    public static function parametro_margemLucro(){
        $margem = 0.25;
        return $margem;
    }

    function cadastraProduto($cod_prod, $custo_compra, $descricao, $qtd){
        $this->cod_prod      = $cod_prod;
        $this->custo_compra  = $custo_compra;
        $this->descricao     = $descricao;
        $this->qtd           = $qtd;

        return "\n
                {$this->cod_prod} \n
                {$this->custo_compra} \n
                {$this->descricao} \n
                {$this->qtd} \n
                \n";
    }

}
$cl_Estatico = PrecoProduto::parametro_margemLucro();

echo($cl_Estatico);

$cadastraItem = new PrecoProduto;

echo($cadastraItem->cadastraProduto(1,100,'Mouse',100));

$cadastraItem->custo_compra += ($cl_Estatico * 100);

echo($cadastraItem->custo_compra);
