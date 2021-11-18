<?php
class Produto{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco){
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais.";
    }

    public function setDescricao($valor){
        $this->descricao = $valor;
    }

    public function setPreco($valor){
        $this->preco = $valor;
    }

    public function getDescricao($valor){
        return $this->descricao;
    }

    public function getPreco($valor){
        return $this->preco;
    }
}

$p1 = new Produto('Livro', 50);


var_dump($p1);
//echo $p1->getDetalhes();