<?php

class Veiculo
{
	public $marca;
	public $cor;
	public $velocidade;
	public function acelerar(){}
	public function freiar(){}
}



class Moto extends Veiculo{
	public function acelerar(){
		$this->velocidade+= 5;

	}
}
class Carro extends Veiculo{
	public function acelerar(){
		$this->velocidade+= 10;
	}
}

class Bike extends Veiculo{
	public function acelerar(){
		$this->velocidade+= 2;
	}
}
echo "<pre>";
$car = new Carro();
$car->acelerar();
var_dump($car);