<?php
class NaoPodeSomarNumerosNegativosExeception extends Exception{}
class ASomanaoPodeSermaiordoqueCiquentaExecption extends Exception{}
class OResultadoNaoPodeSerMenordoqueZeroExecpiton extends Exception{}
class NaoseDividePorZeroExecpiton extends Exception{}
class NaoSeMultiplicaPOrZeroExecption extends Exception{}

class Calc
{
	public static function soma($a, $b){
	if ($a < 0 || $b < 0){
		throw new NaoPodeSomarNumerosNegativos("Error Processing Request");
	
	}	return $a + $b;

	
	if (($a +$b) <= 50){
		throw new ASomanaoPodeSermaiordoqueCiquenta("Error Processing Request");
	}
	}		


	public static function subitrair($a, $b){
				if ($a -$b < 0){
					throw new OResultadoNaoPodeSerMenordoqueZero("Error Processing Request");
							
				}	return $a - $b;

	} 
	
	
	public static function divisao($a, $b){
		if ($a <0 ||$b < 0){
			throw new NaoseDividePorZero("Error Processing Request");
			
		}		return $a / $b;

}
	
	public static function multiplica($a, $b){
		if ($a < 0 || $b < 0){
			throw new NaoSeMultiplicaPOrZero("Error Processing Request");
			
		}
				return $a * $b;

	} 
	


}






try {
	echo Calc::soma(15,39);
} catch (Exception $e)
{
	echo "Erro: {$e->getMessage()} <br>";
}


echo Calc ::subitrair(13,9);
echo "<hr>";
echo Calc ::divisao(81,9);
echo "<hr>";
echo Calc ::multiplica(13,9);
echo "<hr>";