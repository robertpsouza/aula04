<?php

class Calc
{
	public static function soma($a, $b){
		return $a + $b;

	}
	public static function subitrair($a, $b){
		return $a - $b;
	} 
	
	public static function divisao($a, $b){
		return $a / $b;
	} 

	public static function multiplica($a, $b){
		return $a * $b;
	} 
	


}
echo Calc ::soma(15,12); 
echo "<hr>";
echo Calc ::subitrair(13,9);
echo "<hr>";
echo Calc ::divisao(81,9);
echo "<hr>";
echo Calc ::multiplica(13,9);
echo "<hr>";