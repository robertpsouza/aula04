<?php
class Aluno {
	
	public $nome;
	public function __set($prop, $value){
		echo $prop.'-' $value;
	}

	public function __get($prop){
		$this->atributos;
	}
}
echo "<pre>";
$aluno = new Aluno();
$aluno->note = "Roberto";
$aluno->email= "roberto@roberto";