<?php
echo "<pre>";

$conexao = new PDO('pgsql: host=localhost;dbname=aula05','roberto','123');
$conexao->setAtribute(PDO::ATTR_ERRRMODE,PDO::ERRMODE_EXECPTION)
//$sql = "INSERT INTO usuarios(usuario,senha) VALUES('JOnh M. Levis','123')";
//$conexao->exec($sql);


// $sql = "SELECT * FROM usuarios";
// $result = $conexao->query($sql)