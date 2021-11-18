<?php
class Conta // final serve para impedir heranças apartir de uma classe // abstract serve para nao deixar uma classe ter objetos instanciados para heranças de outras class
{
    private $agencia;
    private $conta;
    private $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getDetalhes()
    {
        return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
        echo "Depósito de: {$valor} | Saldo: {$this->saldo}<br />";
    }
}

class Poupanca extends Conta
{
    public function saque($valor)
    {
        if ($this->saldo >= $valor) :
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
        else :
            echo "Saque não autorizado | Saldo atual: {$this->saldo}<br />";
        endif;
    }
}

class Corrente extends Conta
{
    protected $limite;
    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->lmite = $limite;
    }

    public function saque($valor)
    {
        if (($this->saldo + $this->limite) >= $valor):
            $this->saldo -= $valor;
            echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
        else :
            echo "Saque não autorizado | Saldo atual: {$this->saldo} | Limite: {$this->limit}<br />";
        endif;
    }
}

$c1 = new Corrente(100, 2586, 5000, 500);
$c1->depositar(2000);
$c1->saque(1000);

echo $c1->getDetalhes();
