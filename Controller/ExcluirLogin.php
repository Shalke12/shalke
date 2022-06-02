<?php
require_once '../Dao/LoginDAO.php';

$idLogin = $_GET["id"];


$LoginDAO = new LoginDAO();
$LoginDAO->excluirLogin($idLogin);

echo "<script>";
echo "window.location.href = '../View/ListarLogin.php';";
echo "</script> ";
?>


