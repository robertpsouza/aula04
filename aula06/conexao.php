<?php

class conexao 
{
	private static $user = 'roberto';
	private static $pass = '123456';
	private static $dsn = 'pgsql:host=localhost;dbname=tarefas';

	private static $instance = null;
	private function __construct (){}
	private function __clone (){} 
	public static function getInstance(){
		if (!self ::$instance){
			self ::$instance = new PDO(self::$dsn,self::$user,self::$pass);
		}
		return self ::$instance;
	}
}

var_dump(conexao::getInstance());