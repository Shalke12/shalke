<?php
require_once '../Dao/LoginDAO.php';
require_once '../Dto/LoginDTO.php';

$nome = $_POST["nome"];
$login = $_POST["login"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$Perfil_idPerfil = $_POST["Perfil_idPerfil"];
$idLogin = $_POST["idLogin"];

$LoginDTO=new LoginDTO();

$LoginDTO->setNome($nome);
$LoginDTO->setLogin($login);
$LoginDTO->setEmail($email);
$LoginDTO->setSenha($senha);
$LoginDTO->setPerfil_idPerfil($Perfil_idPerfil);
$LoginDTO->setIdLogin($idLogin);
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
//exit();

$LoginDAO = new LoginDAO();
$verificar = $LoginDAO->updateLoginById($LoginDTO);

  if ($verificar) {

            echo "<script>";
            echo "alert(' Alteração realizada com sucesso!');";
            echo "window.location.href='../View/ListarLogin.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert.(' Erro ao alterar!');";
            echo "window.location.href='../View/ListarLogin.php';";
            echo "</script>";
        }
        ?>

