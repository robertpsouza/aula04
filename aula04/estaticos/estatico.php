<?php
class Caneta
{
	public static $tamano =10;
	private $cor;
	public function __construct ($cor){
		$this->cor = cor;

	}
}	
public function getTamanho(){
	return self ::$tamano;

}
public functiongetCor(){
	return $this->cor;
}
}

$azul = new Caneta('azul');
$preta = new Caneta('preta');
echo "<br>";
