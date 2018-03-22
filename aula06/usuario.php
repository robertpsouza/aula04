<?php

require 'conexao.php';

class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public function __construct (string $nome, string $email, string $senha)
	{
		$this->nome =$nome;
		$this->emai =$email;
		$this->senha= md5($senha);
	}
	public function salvar (){
		try{
			$con = Conexao::getInstance();

			$sql = "INSERT INTO tb_usuarios (nome,email,senha) VALUES('{$this->nome}','{$this->email}', '{$this->senha}')";
			
			$con ->exec($sql);
		}catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}

$usuario = new Usuario('Roberto P.Souza','robertpsouza@hotmail.com','123');
$usuario->salvar();