<?php
// endereco
// nome do BD
// usuario
// senha


$host = $_SERVER['HTTP_HOST'];

$endereco = 'localhost';
$banco = 'ShalkeXII';
$usuario = 'postgres';
$senha = '123456';

echo $host;

if ($host == 'shalke12.herokuapp.com')	
{
	$endereco = 'ec2-34-231-221-151.compute-1.amazonaws.com';
	$banco = 'd1esmgvap6do64';
	$usuario = 'bmxmaoiqgbunqw';
	$senha = '5d897b3b8171d1c06a4efeeff5efa37b4da32172ab4fa7a66759c5c505dd2079';
}


try {
  // sgbd:host;port;dbname
  // usuario
  // senha
  // errmode
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  //echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}

?>
