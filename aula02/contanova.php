<?php

abstract class Conta
{
	private $titular;
	protected $saldo;
	protected $numConta;
	private $senha;

	public function __construct(string  $nome,string $senha, int $saldo =0){


     	$this->saldo= $saldo
     	$this->$titular = $nome;
     	$this-> gerarNumConta();
}	
	abstract protected function gerarNumConta();	
	abstract protected function depositar (int $valor);
	abstract protected function sacar (int $valor);

	public function getSaldo(){
		return $this->saldo;
	}

	public function getTitular(){
		return $this->titular;
	}

	public function getNumConta(){
		return $this->numConta;
	}


}
class contaPupanca extends Conta
{
	protected function gerarNumConta(){
		$this->numConta ='cp:' .rand(100,998);
	}
	public function depositar (int $valor){
		$this->saldo+= $valor +(%valor * 0.02);
	}
	public function sacar (int $valor){
		$this->saldo -= $valor;
}

echo "<pre>";
$cp = new ContaPoupanca("lucas","123",10000);
var_dump($cp);
$cp->depositar(50);
var_dump($cp);
$cp->sacar(150);
var_dump($cp);
var_dump($cp->getSaldo());
var_dump($cp->getTitular());
var_dump($cp->getNumConta());