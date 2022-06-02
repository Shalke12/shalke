
<?php

session_start();
require_once '../Dao/LoginDAO.php';

$Usuario = $_POST["login"];
$senha = md5($_POST["senha"]);

$loginDAO = new LoginDAO();
$login = $loginDAO->login($Usuario, $senha);

if ($login) {
    $_SESSION["login"] = $login["login"];
    $_SESSION["perfil"] = $login["perfil"];
    $_SESSION["nome"] = $login["nome"];
    $_SESSION["idPerfil"] = $login["idperfil"];
//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";
//    exit();
    echo "<script>";
    echo "window.location.href = '../View/Principal.php';";
    echo "</script> ";
} else {
        
    echo "<script>";
    echo "alert('Usuário não cadastrado ou senha inválida!');";
    echo "window.location.href='../index.php';";
    echo "</script> ";
    
    
   
}
?>
  