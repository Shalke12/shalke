<?php

require_once '../Dao/LoginDAO.php';
require_once '../Dto/LoginDTO.php';

$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$Perfil_idPerfil = $_POST["Perfil_idPerfil"];

$LoginDTO=new LoginDTO();

$LoginDTO->setNome($nome);
$LoginDTO->setLogin($login);
$LoginDTO->setEmail($email);
$LoginDTO->setSenha($senha);
$LoginDTO->setPerfil_idPerfil($Perfil_idPerfil);

//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//exit();

$LoginDAO = new LoginDAO();
$sucesso = $LoginDAO->salvarLogin($LoginDTO);

if ($sucesso){
    echo "<script>";
            echo "alert('Cadastro realizado com sucesso!');";
            echo "window.location.href='../View/ListarLogin.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao cadastrar Aluno!');";
            echo "window.location.href='../View/ListarLogin.php';";
            echo "</script>";
}
?>

 