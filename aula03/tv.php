<?php
interface TelevisaoInterface
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function ligar();
	public function desligar();
	public function trocarCanal($canal);

}

class tv implements TelevisaoInterface
{
	public function $volume = 10;
	public function $canal = 2;
	public function $estado = false;

	public function aumentarVolume(){
		$this->volume++;
	}
	public function diminuirVolume(){
		$this->volume--;
	}
	public function ligar(){
		$this->estado = true;
	}
	public function desligar(){
		$this->estado = false;
	}

}
echo "<pre>";
$tv = new TV();
print_r($tv);
echo "<hr>";


