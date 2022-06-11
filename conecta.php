<?php
// endereco
// nome do BD
// usuario
// senha

$uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];

$endereco = 'localhost';
$banco = 'ShalkeXII';
$usuario = 'postgres';
$senha = '123456';

echo $host;


if ($host == 'shalke12.herokuapp.com')	
{
$endereco = 'ec2-34-225-159-178.compute-1.amazonaws.com	';
$banco = 'd30lvosqrpe06r';
$usuario = 'nkjcxrpjrvebuw';
$senha = 'f17c0002ec0c1c4e204e3b786fd4674badd8f3754fef9f5c52af97b50be0f308';
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