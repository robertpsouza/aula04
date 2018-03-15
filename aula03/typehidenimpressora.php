<?php

class Impressora
{
	public function  imprimir ($doc){
		echo $doc->getConteudo();
	}
}
abstract class DocGenerico{
	abstract public funtion getConteudo();
}
class Documento extends DocGenerico
{
	private $conteudo;
	public function __construct (string $conteudo){
		$this-> conteudo = $conteudo;
	}
	public function getConteudo(){
		$this->conteudo;
	}

}
class PLanilha extends DocGenerico
{
	private $conteudo
	public function __construct(array $conteudo){
		foreach ($conteudo as $linha){
			$this->conteudo .= $linha ."<br>"
		}
	}
	public function getConteudo(){
		return $this->conteudo;
	}
}

$planilha = new PLanilha(['oi','ola']);
echo "<hr>"
$imp= nem Impressora();
$imp->imprimir($documento);
echo "<hr>";

$imp->imprimir($planilha);
